<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;
use GuzzleHttp\Client;

use App\Http\Resources\Academia\EnrollmentResource;
use App\Models\Academia\EnrollmentModel as Enrollment;

class EnrollmentResourceController extends Controller
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

   private function getDataUniversity($university)
   {
      try {
        $result = $this->client->FA_NivelEstudio([
          'ANIO_ACADEMICO'  => date("Y"),
          'TIPO_SERVICIO'   => 'ACADE',
          'SERVICIO'        => $university
        ]);

        $collection = collect($result->FA_NivelEstudioResult);
        $return     = new EnrollmentResource($collection);
        
        //Cache::put($university, $return, 20160);

        return $return;

      } catch ( SoapFault $e ) {
        //echo $e->getMessage();
      }
   }

   public function cycle($university, $cycle)
   {
    
    try{
        $result = $this->client->FA_Bldg([
          'ANIO_ACADEMICO'  => date("Y"),
          'TIPO_SERVICIO'   => 'ACADE',
          'SERVICIO'        => $university,
          'NIVEL_ESTUDIO'   => $cycle
        ]);

        $collection = collect($result->FA_BldgResult);
        $return     = new EnrollmentResource($collection);
        
        //Cache::put($university, $return, 20160);

        return $return;

    }catch (SoapFault $e){}

   }
}
