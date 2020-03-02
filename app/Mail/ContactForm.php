<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $subject;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->email = $request->email;
        $this->name = $request->name;
        $this->subject = $request->subject;
        $this->message = $request->message;

        session(['name' => $request->name]);
        session(['email' => $request->email]);
        session(['subject' => $request->subject]);
        session(['message' => $request->message]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->email, $this->name)
            ->subject($this->subject)
            // ->replyTo('output@g-d.com')
            // ->cc('dani@g-d.com')
            // ->bcc('allen@g-d.com')
            ->markdown('email.contact');

    }
}