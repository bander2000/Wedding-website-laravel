<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $information;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$information)
    {
        //
        $this->user = $user;
        $this->information = $information;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->user->email)->
        subject('pay for your wedding')->
        markdown('emails.sendDemoMail');
    }
}
