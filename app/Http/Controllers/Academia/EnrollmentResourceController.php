<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\Academia\EnrollmentResource;

class EnrollmentResourceController extends Controller
{
    public $url = [
      'sm'    => 'http://app.trilce.edu.pe/informacion-ciclos-sm/registro/',
      'uni'   => 'http://app.trilce.edu.pe/informacion-ciclos-uni/registro/',
      'pucp'  => 'http://app.trilce.edu.pe/informacion-ciclos-cat/registro/'
    ];
    public $urlCombo = 'combo.php';

    public function __construct()
    {
      
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function university($university)
     {
       $urlU     = $this->url[$university];
       $data     = file_get_contents($urlU);
       $data     = collect($this->getOptionsVenue($data));
       return new EnrollmentResource($data);
     }
     
     public function venue($university, $key)
     {
       $urlU     = $this->url[$university];
       $data     = file_get_contents($urlU);
       $venue    = $this->getOptionsVenue($data);
       $collection = collect($this->getInfoVenue($urlU.$this->urlCombo, $key));
       return new EnrollmentResource($collection);
     }
     
     
     function explodeDiv($a,$b,$c)
     {
       $t = explode($a,$c);
       $t2 = explode($b, $t[1]);
       return $t2[0];
     }

     function post_to_url($url, $data)
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
        curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($post);
        curl_close($post);
        return $result;
     }

     function getOptionsVenue($data)
     {
       $options = $this->explodeDiv('<select name="cboLocal','</select', $data);
       preg_match_all("# value=([0-9]+)>(.*?)</#", $options, $options);
       return array_combine(array_map('strtolower', $options[2]), $options[1]);
     }

     function getInfoVenue($url, $venue)
     {
       $opt = [
         'intidlocal'  => $venue,
         'intidciclol' => 0,
         'intidturno'  => 0
       ];
       
       $url = $this->post_to_url($url, $opt);
       preg_match_all("#<strong>(.*?)</strong>#", $url, $cycles);
       $cycles = array_unique($cycles[1]);
       return $cycles;
     }
     
    
}
