<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class toMe extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $amount){
        $this->email = $email;
        $this->amount = $amount;
        $this->name = $name;
    }

    /**
     * Get the attachments for the message.
     *
     * @return $this
     */
    public function build(){
        return $this->from($this->email, $this->name)->subject('Private sale')->view('toMe')->with('name', $this->name, 'email', $this->email, 'amount', $this->amount);
    }
}
