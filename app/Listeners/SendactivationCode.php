<?php

namespace App\Listeners;

use App\Events\RegisteredUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendactivationCode implements ShouldQueue
{

    public function __construct()
    {
        //
    }


    public function handle(RegisteredUser $event)
    {
        \Log::info('activation',(['user'=>$event->user]));
    }
}
