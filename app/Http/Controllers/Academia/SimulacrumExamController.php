<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;
use App\Http\Resources\Academia\Apis\SimulacrumApiResource; 

class SimulacrumExamController extends Controller
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

	public function index(Request $request)
	{

		$university = University::validate( ucwords(Str::slug($request->university, ' ')) );

		if(!$university)
		return abort(404);

		return view('/academia/simulacrum_exam')->with([
			'university' => $university,
			'idexam' => $request->idexam
		]);
	}

	public function store()
	{
		$data = [];
      $data['request'] = [
				'CODE_URL'            => 'aedd8971b7',
				'BLDG_TBL'            => 'ISACADSB',
				'SERVICIO'            => 'ACAUN',
				'CODIGO_AREA'         =>  '1',
				'CODIGO_CARRERA'      =>  '1',
				'ANIO_ACADEMICO'      =>  2019,
				'TIPO_DOCUMENTO'      => '01',
				'NRO_DOCUMENTO'       => '95362547',
				'NOMBRES'             => 'Juana',
				'PRIMER_APELLIDO'     => 'Perez',
				'SEGUNDO_APELLIDO'    => 'Silva',
				'CORREO_E'            => 'abc@gmail.com',
				'COMENTARIO'          => 'Un comentario'
				];
				
				if(env('APP_ENV') == 'local')
				{
					$url = \Config::get('constants.API_ClientePublicoServicioLocal');
				}else{
					$url = \Config::get('constants.API_ClientePublicoServicioProduction');
				}
	
				$client = new \SoapClient($url, [
					'trace' => 1
				]);
	
				try {
					$result = $client->SimulacroInscripcion($data);
	
				}catch(SoapFault $e){
	
				}
	}
}
		/*try {
			$result = $this->client->SimulacroInscripcion([
				/*'CODE_URL' => $request->CODE_URL,
				'BLDG_TBL' => $request->BLDG_TBL,
				'SERVICIO' => $request->SERVICIO,
				'CODIGO_AREA' => $request->CODIGO_AREA,
				'CODIGO_CARRERA' => $request->CODIGO_CARRERA,
				'ANIO_ACADEMICO' => date("Y"),
				//'NIVEL_ESTUDIO' => $request->NIVEL_ESTUDIO,
				'TIPO_DOCUMENTO' => $request->TIPO_DOCUMENTO,
				'NRO_DOCUMENTO' => $request->NRO_DOCUMENTO,
				'NOMBRES' => $request->NOMBRES,
				'PRIMER_APELLIDO' => $request->PRIMER_APELLIDO,
				'SEGUNDO_APELLIDO' => $request->SEGUNDO_APELLIDO,
				'CORREO_E' => $request->CORREO_E,
				'COMENTARIO' => $request->COMENTARIO,

				'CODE_URL' 					=> 'aedd8971b7',
				'BLDG_TBL' 					=> 'ISACADSB',
				'SERVICIO' 					=> 'ACAUN',
				'CODIGO_AREA' 			=> '5',
				'CODIGO_CARRERA' 		=> '8',
				'ANIO_ACADEMICO' 		=> date("Y"),
				'TIPO_DOCUMENTO'		=> '01',
				'NRO_DOCUMENTO' 		=> '47569180',
				'NOMBRES' 					=> 'Jose',
				'PRIMER_APELLIDO' 	=> 'Perez',
				'SEGUNDO_APELLIDO' 	=> 'Perez',
				'CORREO_E' 					=> 'christhisam@gmail.com',
				'COMENTARIO' 				=> 'Un gran comentario'
			]);
			//$result = $this->client->SI_LOCAL([
				//'CODE_URL'  => 'aedd8971b7'
			//]);

			$collection = collect($result->SimulacroInscripcionResult);

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}*/

		//return new SimulacrumApiResource($collection);

