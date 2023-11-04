<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TiketMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;



    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->view('mails.tiket')
        ->subject('Thông báo đặt vé xe')
        ->with([
            'data'    => $this->data,
        ]);
    }
}
