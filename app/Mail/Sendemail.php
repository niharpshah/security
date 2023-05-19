<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Sendemail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $semail;
    public $contact;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$semail,$contact,$msg)
    {
        //
        $this->name = $name;
        $this->semail=$semail;
        $this->contact=$contact;
        $this->msg=$msg;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject:'New inquiry is arrived',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view:'content',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
