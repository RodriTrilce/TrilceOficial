<?php
namespace App\Http\Controllers\Academia;

use \Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MathOlympicsRegisterController extends Controller
{

    public function __construct()
	{
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$university = University::validate( ucwords(Str::slug($request->university, ' ')) );

		//if(!$university)
		//return abort(404);

		return view('/academia/math_olympics_register')->with([
			'codurl' => $request->codurl
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

			$result = $this->client->OlimpiadasInscripcion($data);
			$collection = collect($result->OlimpiadasInscripcionResult);

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}
		return new OlympicsApiResource($collection);
		//return view('/academia/simulacrum_exam_exito');

		//return redirect()->route('academia-index')->with([
			//'enrollment'  => true,
			//'dni'         => encrypt($request->step1_dni)
		 // ]);
    }
}