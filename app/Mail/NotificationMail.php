<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $template;


    public function __construct($subject, $template, $data)
    {
        $this->data = $data;
        $this->template = $template;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        #mails.carRegister
        return $this->view($this->template)
            ->subject($this->subject)
            ->with([
                'data' => $this->data,
            ]);
    }
}
