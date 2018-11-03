<?php

namespace App\Listeners;

use App\Events\RegisteredUser;
use App\Profile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
{

    public function __construct()
    {
        //
    }


    public function handle(RegisteredUser $event)
    {
        $profile=new Profile();


        $profile->city="Dhaka";
        $profile->about="Very good city";

        $event->user->profile()->save($profile);

    }
}
