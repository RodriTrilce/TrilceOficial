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

	public function store(Request $request)
	{
		$data = [];
		$data['request'] = [
			'CODE_URL' 			=> $request->CODE_URL,
			'BLDG_TBL' 			=> $request->BLDG_TBL,
			'NIVEL_ESTUDIO' 	=> $request->NIVEL_ESTUDIO,
			'SERVICIO' 			=> $request->SERVICIO,
			'CODIGO_AREA' 		=> $request->CODIGO_AREA,
			'CODIGO_CARRERA'	=> $request->CODIGO_CARRERA,
			'ANIO_ACADEMICO'	=> date("Y"),
			'TIPO_DOCUMENTO'	=> $request->TIPO_DOCUMENTO,
			'NRO_DOCUMENTO' 	=> $request->NRO_DOCUMENTO,
			'NOMBRES'			=> $request->NOMBRES,
			'PRIMER_APELLIDO' 	=> $request->PRIMER_APELLIDO,
			'SEGUNDO_APELLIDO'	=> $request->SEGUNDO_APELLIDO,
			'CORREO_E' 			=> $request->CORREO_E
			//'COMENTARIO' 		=> $request->COMENTARIO
		];
		try {

			$result = $this->client->SimulacroInscripcion($data);
			$collection = collect($result->SimulacroInscripcionResult);

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}
		//return new SimulacrumApiResource($collection);
		/*return view('/academia/simulacrum_exam_exito')->with([
			'university' => $request->NIVEL_ESTUDIO,
			'idexam' => $request->idexam
		]);;*/

		return redirect()->route('academia-index')->with([
			'simulacrum'  => true
		  ]);
	}
}