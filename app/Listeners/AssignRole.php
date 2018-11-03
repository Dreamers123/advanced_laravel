<?php

namespace App\Listeners;

use App\Events\RegisteredUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignRole
{

    public function __construct()
    {
        //
    }

    public function handle(RegisteredUser $event)
    {
      \Log::info('role',(['user'=>$event->user]));
    }
}
