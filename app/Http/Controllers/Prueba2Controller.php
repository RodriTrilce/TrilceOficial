<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Prueba2Controller extends Controller
{
    public function index(){
      $client = new Client();
      // start request
      $promise = $client->getAsync('http://loripsum.net/api')->then(
          function ($response) {
              return $response->getBody();
          }, function ($exception) {
              return $exception->getMessage();
          }
      );

      // do other things
      echo '<b>This will not wait for the previous request to finish to be displayed!</b>';

      // wait for request to finish and display its response
      $response = $promise->wait();
      echo $response;
    }
}
