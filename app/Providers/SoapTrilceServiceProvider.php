<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \SoapClient;

class SoapTrilceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function _client()
    {
        $opts = [
            'ssl' = [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        $context    = stream_context_create($opts);
        $wsdl       = "http://10.107.0.253:20169/General/ClientePublicoServicio.svc?wsdl";

        try{
            $this->client = new \SoapClient($wsdl, [
                'stream_context' => $context,
                'trace'          => true
            ]);

            return $this->client;
        
        }catch ( \Exception $e) {
            Log::info('Caught Exception in client'. $e->getMessage());
        }
    }

    
}
