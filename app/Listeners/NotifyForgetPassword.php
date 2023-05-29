<?php

namespace App\Listeners;

use App\Events\ForgetPasswordCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ForgetPasswordMail;
use App\Models\User;

class NotifyForgetPassword
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
     * @param  \App\Events\ForgetPasswordCreated  $event
     * @return void
     */
    public function handle(ForgetPasswordCreated $event)
    {
       $email = $event->user['email'];
       
        \Mail::to($email)->send(new ForgetPasswordMail($event->user));
        
    }
}
