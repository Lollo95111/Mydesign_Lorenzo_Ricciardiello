<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable

{

    use Queueable, SerializesModels;

public $nome;

public $richiesta;



    /**

     * Create a new message instance.

     */

    public function __construct($_nome,$_richiesta)

    {

     $this->nome = $_nome;

     $this->richiesta = $_richiesta;


    }

    /**

     * Get the message envelope.

     */

    public function envelope(): Envelope

    {

        return new Envelope(

            subject: 'Contact Mail',

        );

    }

    /**
     * Get the message content definition.
     */

        public function content(): Content {

        return new Content(
            view: 'mail.contactmail',
        );
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
