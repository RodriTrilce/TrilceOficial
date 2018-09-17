<?php

namespace App\Console\Commands\Mail;

use Illuminate\Console\Command;
use App\Models\Out\Ecotrilce;
use App\Models\Out\Listdriver;
use App\Mail\Report\ReportBasicMail;

class MailBecaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendmailbeca';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail´s beca Trilce.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
     public function handle()
     {
       // 5 correos por minuto =  300 por hora * 5 horas = 1500 correos.
       $users = Ecotrilce::where('send2', '=', '0')->limit(15)->get();

       foreach ($users as $user) {

         if(!filter_var($user->email, FILTER_VALIDATE_EMAIL)){
           return;
         }else{

               $count = Listdriver::where('id', '=', '2')->first();

               if(($count->count % 100) == 0
                    || ($count->count == 1)
                 ){
                 $franco = new \stdClass();
                 $franco->name = 'franco';
                 $franco->email = 'fsalcedo@trilce.edu.pe';
                 $franco->report = 'Enviado hasta la cantidad numero -> ' . $count->count;
                 $franco->subject = 'Envio masivo - Trilce r:' . rand(0,9999);
                 Mail::send( new ReportBasicMail($franco) );
               }

               if($count->count == 4000){
                 $marcela = new \stdClass();
                 $marcela->name = 'Marcela';
                 $marcela->email = 'mdellafredad@trilce.edu.pe';
                 $marcela->report = 'Enviados hasta el momento > ' . $count->count;
                 $marcela->subject = 'Informe masivo mail:beca';
                 Mail::send( new ReportBasicMail($marcela) );
               }

               Mail::send( new EcotrilceMail($user) );
               $user->update(['send1' => 1]);
               $count->update(['count' => $count->count + 1]);

         }

       }

     }
}
