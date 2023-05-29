<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactUsMail;
use App\Models\Contact;

class NotifyContact
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
     * @param  \App\Events\ContactCreated  $event
     * @return void
     */
    public function handle(ContactCreated $event)
    {
        $email = $event->data['email'];
        \Mail::to($email)->send(new ContactUsMail($event->data));
    }
}
