<?php

namespace App\Mail\Academia;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnrollmentMail extends Mailable
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
      return $this->from( env('MAIL_DEFAULT_SENDER') )
                  ->to( $this->data->step2_email )
                  ->subject('Ficha de Matrícula - Trilce Academia')
                  ->view('resources.mail.academia.enrollment.enrollment_finish')
                  ->text('resources.mail.academia.enrollment.enrollment_finish_plain')
                  ->with(
                    [
                          'data'    => $this->data
                    ]);
    }
}
