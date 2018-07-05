<?php

namespace App\Mail\Out;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EcotrilceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from(env('MAIL_DEFAULT_SENDER'))
                  ->to($this->data->email)
                  ->subject('Menos plástico, más vida.')
                  ->view('resources.mail.out.ecotrilce.finish')
                  ->text('resources.mail.out.ecotrilce.finish_plain')
                  ->with(
                    [
                          'data'    => $this->data,
                          'image'   => storage_path("app/public/mail/out/ecotrilce.jpg")
                    ]);
    }
}
