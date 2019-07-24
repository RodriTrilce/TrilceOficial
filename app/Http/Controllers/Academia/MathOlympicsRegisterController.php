<?php
namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Resources\Academia\Apis\OlympicsApiResource;
use Mpdf\Mpdf;

class MathOlympicsRegisterController extends Controller
{

    public function __construct(){
		if(env('APP_ENV') == 'local')
		{
			$url = \Config::get('constants.API_ClientePublicoServicioLocal');
		}else{
			$url = \Config::get('constants.API_ClientePublicoServicioProduction');
		}

		$this->client = new \SoapClient($url, [
			'trace' => 1
		]);
		}
		
		//Agregar en el array manualmente los codidos de las Olimpiadas ya no activas
		// Example: array('CODEURL','CODEURL'.....);
		public function blacklist($codurl)
		{
			$notactive = array('');
			$longitud = count($notactive);
			for($i=0; $i<$longitud; $i++)
				{
					if($codurl == $notactive[$i]){
						return true;
					}
				}
		}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        //$university = University::validate( ucwords(Str::slug($request->university, ' ')) );

		//if(!$university)
		//return abort(404);
			/*if(!$this->blacklist($request->codurl)){
				try {
					$result = $this->client->OI_Dato([
						'CODE_URL'  => $request->codurl
					]);*/
			
					/*$collection = collect($result->OI_DatoResult);

					//$result = $this->client->OlimpiadasInscripcion($data);
			
					} catch ( SoapFault $e ) {
					dd($e->getMessage());
					}*/

				return view('/academia/math_olympics_register')->with([
					'codurl' => $request->codurl,
					/*'descripcion' => $collection['DESCRIPCION'],
					'distrito' => $collection['DISTRITO'],
					'inicio' =>  $collection['FECHA_INICIO'],
					'fin' => $collection['FECHA_FIN'],
					'lugar' => $collection['INSTITUCION_EDUCATIVA'],*/

				]);
			/*}else{
				return abort(404);
			}*/
		

	}

	public function store(Request $request){
        $data = [];
		$data['request'] = [
            'CODE_URL' 			    => $request->CODE_URL,
            'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
            'NOMBRES'	            => $request->NOMBRES,
			'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
            'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
            'CORREO_E'	            => $request->CORREO_E,
            'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
            'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
            'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
			'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO			
		];
		try {

			$var = new OlympicsApiResource($data);
			pdfdigital($accion='ver',$tipo='digital',$request->NRO_DOCUMENTO);

			//$result = $this->client->OlimpiadasInscripcion($data);
			//$collection = collect($result->OlimpiadasInscripcionResult);
			

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}	

		return view('/academia/math_olympics_exito')->with([
				'dni' => $request->NRO_DOCUMENTO,
				'nombres' => $request->NOMBRES,
				'apellidos' => $request->PRIMER_APELLIDO.''.$request->SEGUNDO_APELLIDO,
				'correo' => $request->CORREO_E,
				'ie' => $request->TIPO_INSTITUCION,
				'colegio' => $request->TIPO_INSTITUCION,
				'departamento' => $request->DEPTO_UBIG,
				'nivel' => $request->NIVEL_ESTUDIO,
		 ]);
		$var = ['nombres' => $request->NOMBRES];

		$this->pdfdigital('ver','digital',$var);

		/*return redirect()->route('academia-index')->with([
			'olympics'  => true,
		]);*/
		
		//return new OlympicsApiResource($collection);
		//return view('/academia/simulacrum_exam_exito');

		//return redirect()->route('academia-index')->with([
			//'enrollment'  => true,
			//'dni'         => encrypt($request->step1_dni)
		 // ]);
	}

	public function getGenerar(Request $request){
        $accion = $request->get('accion');
        $tipo = $request->get('tipo');
        return $this->pdfdigital($accion,$tipo);
	}
	
	//public function pdfdigital($accion='ver',$tipo='digital'){

	public function pdfdigital($accion='ver',$tipo='digital',$var){
		$data=$var;
		//return view("/academia/math_olympics_pdf", ["nombres"=>$posts]); 
		//return $data->all();
 
        if($accion=='html'){
            return view('/academia/math_olympics_pdf',$data);
        }else{
            $html = view('/academia/math_olympics_pdf',$data)->render();
        }
        $namefile = 'boleta_de_venta_'.time().'.pdf';
 
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
 
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/fonts',
            ]),
            /*'fontdata' => $fontData + [
                'arial' => [
                    'R' => 'arial.ttf',
                    'B' => 'arialbd.ttf',
                ],
            ],*/
            'default_font' => 'arial',
            "format" => "A4",
            //"format" => [264.8,188.9],
        ]);
    	$mpdf->SetTopMargin(5);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        // dd($mpdf);
        if($accion=='ver'){
            $mpdf->Output($namefile,"I");
        }elseif($accion=='descargar'){
            $mpdf->Output($namefile,"D");
        }
    }

	
	/*****************************************************************/
	
	public function indexGroup(Request $request){

		if(!$this->blacklist($request->codurl)){
		try {
			$result = $this->client->OI_Dato([
			  'CODE_URL'  => $request->codurl
			]);
  
			$collection = collect($result->OI_DatoResult);

			//$result = $this->client->OlimpiadasInscripcion($data);
  
		  } catch ( SoapFault $e ) {
			dd($e->getMessage());
		  }
		
		  

			return view('/academia/math_olympics_group_register')->with([
				'codurl' => $request->codurl,
				'descripcion' => $collection['DESCRIPCION'],
				'distrito' => $collection['DISTRITO'],
				'inicio' =>  $collection['FECHA_INICIO'],
				'fin' => $collection['FECHA_FIN'],
				'lugar' => $collection['INSTITUCION_EDUCATIVA'],
			]);
		}else{
			return abort(404);
		}
  	}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

	
	public function storeGroup(Request $request){
		/*try {
				$longitud = count($request->NRO_DOCUMENTO);
				for($i=0;$i<$longitud;$i++)
 				{

					$data = [];
					$data['request'] = [
						'CODE_URL' 			    => $request->CODE_URL,
						'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO[$i],
						'NOMBRES'	            => $request->NOMBRES[$i],
						'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO[$i],
						'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO[$i],
						//'CORREO_E'	        => $request->CORREO_E,
						'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
						'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
						'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
						'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO			
					];

					$result = $this->client->OlimpiadasInscripcion($data);
				}

				$collection = collect($result->OlimpiadasInscripcionResult);

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}*/

		return view('/academia/simulacrum_exam_exito')->with([
			'nombre'  => $request->NRO_DOCUMENTO[$i]
		 ]);

		/*return redirect()->route('academia-index')->with([
			'olympics'  => true,
		]);*/

		//dd($collection);

		/*return redirect()->route('academia-index')->with([
			'olympics'  => true,
		]);*/
		
		//return new OlympicsApiResource($collection);


		//return redirect()->route('academia-index')->with([
			//'enrollment'  => true,
			//'dni'         => encrypt($request->step1_dni)
		 // ]);
    }
}