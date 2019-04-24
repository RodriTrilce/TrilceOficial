<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;

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
        try {
          $result = $this->client->SimulacroInscripcion([
			'ANIO_ACADEMICO' => date("Y"),
			'BLDG_TBL' => $request->BLDG_TBL,
			'CODE_URL' => $request->CODE_URL,
			'CODIGO_AREA' => $request->CODIGO_AREA,
			'CODIGO_CARRERA' => $request->CODIGO_CARRERA,
			'COMENTARIO' => $request->COMENTARIO,
			'CORREO_E' => $request->CORREO_E,
			'NIVEL_ESTUDIO' => $request->NIVEL_ESTUDIO,
			'NOMBRES' => $request->NOMBRES,
			'NRO_DOCUMENTO' => $request->NRO_DOCUMENTO,
			'PRIMER_APELLIDO' => $request->PRIMER_APELLIDO,
			'SEGUNDO_APELLIDO' => $request->SEGUNDO_APELLIDO,
			'SERVICIO' => $request->SERVICIO,
			'TIPO_DOCUMENTO' => $request->TIPO_DOCUMENTO,
          ]);

          $collection = collect($result->SimulacroInscripcionResul);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

        dd($collection);
	}

}
