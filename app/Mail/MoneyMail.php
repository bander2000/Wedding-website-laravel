<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MoneyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $money;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$money)
    {
        //
        $this->user = $user;
        $this->money = $money;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from($this->user->email)->
        subject('Infromation for your wedding')
        ->markdown('emails.MoneyMail');
    }
}
