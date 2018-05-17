<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
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
        return $this->from('atencionalcliente@trilce.edu.pe')
                    ->to('atencionalcliente@trilce.edu.pe')
                    ->view('resources.mail.contact')
                    ->text('resources.mail.contact_plain')
                    ->with(
                      [
                            'name'    => $this->data->name,
                            'content' => $this->data->content,
                            'phone'   => $this->data->phone,
                            'email'   => $this->data->email
                      ]);
    }
}
