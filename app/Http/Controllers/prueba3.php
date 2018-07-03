<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as ClientGuzzle;
use Symfony\Component\DomCrawler\Crawler;

class prueba3 extends Controller
{

  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->source = new \stdClass;
    $this->source->base   = 'http://app.trilce.edu.pe';
    $this->source->uni    = '/informacion-ciclos-uni/registro/combo.php';
    $this->source->sm     = '/informacion-ciclos-sm/registro/combo.php';
    $this->source->pucp   = '/informacion-ciclos-cat/registro/combo.php';
  }

  /**
   * Index show
   *
   * @return void
   */
  public function index()
  {

    $data = $this->makeResponse('pucp', 'venue', 0, 0, 0);
    dd($data);

  }

  /**
   * Make url for request
   *
   * @return object
   */
  private function makeSource($university)
  {
    return $this->source->{$university};
  }

  private function makeRequest($url, $data)
  {
    $client = new ClientGuzzle(['base_uri' => $this->source->base]);
    $response = $client->post($url, [
      'body' => $data,
      'headers' => [
        'Content-Type' => 'application/x-www-form-urlencoded',
      ]
    ]);

    $r = (string) $response->getBody();
    return $this->makeClear($r);
  }

  private function makeClear($string)
  {
    $string = preg_replace('~>\s+<~', '><', $string);
    $string = preg_replace("#tbody class='(.*?)'>#", "tbody class='$1'><tr>", $string);
    $string = str_replace('</tr>', '</tr><tr>', $string);
    $string = str_replace('<tr><tr>', '<tr>', $string);
    $string = str_replace('<tr></tbody>', '</tbody>', $string);
    $string = str_replace('</tr></tr>', '</tr>', $string);
    $string = str_replace('<tr></thead>', '</thead>', $string);

    return $string;
  }

  /**
   * Get dom from url request and parse
   *
   * @return array
   */
  private function makeResponse($university, $combo, $venue=0, $cycle=0, $turn=0)
  {
    switch ($combo) {
      case 'cycle':
        $data = "intidlocal1={$venue}&intidciclo1={$cycle}&intidturno1={$turn}";
        break;

      case 'venue':
        $data = "intidlocal={$venue}&intidciclol={$cycle}&intidturno={$turn}";
        break;

      case 'turn':
        $data = "intidlocal2={$venue}&intidciclo2={$cycle}&intidturno2={$turn}";
        break;
    }

    $crawler = new Crawler($this->makeRequest($this->makeSource($university), $data));

    $buffer = $crawler->filter('table')->each(function ($node){

      $_type = $node->filter('thead')->each(function($n){
        return $n->filter('tr div')->getNode(0)->textContent;
      });

      $_head = $node->filter('thead th')->each(function($v){
        return $v->getNode(0)->textContent;
                
      });

      $_body[$_type[0]] = $node->filter('tbody tr')->each(function($b){
        return $b->filter('td')->each(function($c){
          return $c->getNode(0)->textContent;
        });
      });

      $_body['head'] = $_head;

      return $_body;

    });

    return $buffer;
  }

}
