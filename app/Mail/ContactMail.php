<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{

    use Queueable, SerializesModels;

    private Request $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact.sendMail')
            ->with([
                'last_name' => $this->request['last_name'],
                'other_names' => $this->request['other_names'],
                'email_address' => $this->request['email_address'],
                'message_type' => $this->request['message_type'],
                'message' => $this->request['message']
            ]);
    }
}
