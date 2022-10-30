<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{

    use Queueable, SerializesModels;

    private object $contactMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(object $contactMail)
    {
        $this->contactMail = $contactMail;
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
                'last_name' => $this->contactMail->last_name,
                'other_names' => $this->contactMail->other_names,
                'email_address' => $this->contactMail->email_address,
                'message_type' => $this->contactMail->message_type,
                'message' => $this->contactMail->message
            ]);
    }
}
