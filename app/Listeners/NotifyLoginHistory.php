<?php

namespace App\Listeners;

use App\Events\LoginHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Request;
use Auth;

class NotifyLoginHistory
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
     * @param  \App\Events\LoginHistory  $event
     * @return void
     */
    public function handle(LoginHistory $event)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();

        $userinfo = Auth::user();
        
        $saveHistory = DB::table('login_histories')->insert(
            [
                'name'  => $userinfo->name, 
                'email' => $userinfo->email, 
                'ip'    => Request::ip(), 
                'agent' => Request::header('user-agent'), 
                'created_at' => $current_timestamp, 
                'updated_at' => $current_timestamp
            ]
        );
        return $saveHistory;
    }
}
