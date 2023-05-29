<?php

namespace App\Listeners;

use App\Events\EnquiryCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\EnquiryMail;
use App\Models\User;

class NotifyEnquiry
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\EnquiryCreated  $event
     * @return void
     */
    public function handle(EnquiryCreated $event)
    {
        
        $adminEmail = User::where('id', 1)->where('is_admin', 1)->value('email');
        $emails = [$adminEmail, $event->data['email']];
        foreach($emails as $email)
        {
            \Mail::to($email)->send(new EnquiryMail($event->data));
        }
    } 
}
