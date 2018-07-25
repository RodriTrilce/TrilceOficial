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
    public $url = [
      'sm'    => 'http://app.trilce.edu.pe/informacion-ciclos-sm/registro/',
      'uni'   => 'http://app.trilce.edu.pe/informacion-ciclos-uni/registro/',
      'pucp'  => 'http://app.trilce.edu.pe/informacion-ciclos-cat/registro/'
    ];

    public $urlCombo = 'combo.php';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function university($university)
     {
      if(Cache::has($university)){
        $data = Cache::get($university);
      }else{
        $data = $this->getDataUniversity($university);
      }

      return new EnrollmentResource($data);
     }

     public function venue($university, $key)
     {
       echo $university;
        echo "\n ";
        echo $key;
        echo "\n ";

/*       if(Cache::has($key.$university)){
         $data = Cache::get($key.$university);
       }else{
*/
         $data = $this->getDataVenue($university,$key);
  //     }
  dd($data);

       return new EnrollmentResource($data);
     }

     private function getDataVenue($university, $key)
     {
        $urlU     = $this->url[$university];
        $data     = $this->getUrl($urlU);
        //$venue    = $this->getOptionsVenue($data);
        $collection = collect($this->getInfoVenue($urlU.$this->urlCombo, $key));

        Cache::put($key.$university, $collection, 20160);
        return new EnrollmentResource($collection);
     }

     private function getDataUniversity($university)
     {
       $urlU     = $this->url[$university];
       $data     = $this->getUrl($urlU);
       $collection = collect($this->getOptionsVenue($data));
       Cache::put($university, $collection, 20160);
       return $collection;
     }

     function explodeDiv($a,$b,$c)
     {
       $t = explode($a,$c);
       $t2 = explode($b, $t[1]);
       return $t2[0];
     }

     function postUrl($url, $data)
     {
        $fields = '';
        foreach($data as $key => $value) {
           $fields .= $key . '=' . $value . '&';
        }
        rtrim($fields, '&');
        $post = curl_init();
        curl_setopt($post, CURLOPT_URL, $url);
        curl_setopt($post, CURLOPT_POST, count($data));
        curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($post, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($post);
        curl_close($post);
        return $result;
     }

     function getUrl($url){
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       $result = curl_exec($ch);
       curl_close($ch);
       return $result;
     }

     function getOptionsVenue($data)
     {
       $options = $this->explodeDiv('<select name="cboLocal','</select', $data);
       preg_match_all("# value=([0-9]+)>(.*?)</#", $options, $options);
       $data =  array_combine(array_map('strtolower', $options[2]), $options[1]);

       foreach ($data as $k => $v) {
         $data[$k] = $k.'|'.$v;
       }

       return $data;
     }

     function getInfoVenue($url, $venue)
     {
       $opt = [
         'intidlocal'  => $venue,
         'intidciclol' => 0,
         'intidturno'  => 0
       ];

       $url = $this->postUrl($url, $opt);
       preg_match_all("#<strong>(.*?)</strong>#", $url, $cycles);
       $cycles = array_flip(array_unique($cycles[1]));

       foreach ($cycles as $k => $v) {
         $cycles[$k] = $k;
       }
       return $cycles;
     }




}
