<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminShop extends Mailable
{
    use Queueable, SerializesModels;
    public $feedback;
    public $parole;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($feedback, $parole)
    {
        $this->feedback = $feedback;
        $this->parole = $parole;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.email');
    }
}
