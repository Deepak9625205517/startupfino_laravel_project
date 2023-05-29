<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subs)
    {
        $this->subs = $subs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->subs->user);
        return $this->subject('Payment Success Notification INV #'.$this->subs->transaction_id.' : Bizkit')->view('emails.invoice_mail',['sub'=>$this->subs]);
    }
}
