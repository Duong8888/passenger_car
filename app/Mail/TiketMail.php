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

    protected $data;
    protected $car;

    public function __construct($data,$car)
    {
        $this->data = $data;
        $this->car = $car;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->view('mails.ticket')
            ->subject('Thông báo đặt vé xe')
            ->with([
                'data' => $this->data,
                'car' => $this->car,
            ]);
    }
}
