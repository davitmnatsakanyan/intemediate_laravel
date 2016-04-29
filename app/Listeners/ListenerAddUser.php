<?php

namespace App\Listeners;

use App\Events\EventUserWasRegistered;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class ListenerAddUser
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
     * @param  EventUserWasRegistered  $event
     * @return void
     */
    public function handle(EventUserWasRegistered $event)
    {
        DB::table('users')->insert(['name'=>'davit', 'email'=>'dav.mnatsakanyan@gmail.com', 'password'=>'06062011', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now() ]);

    }
}
