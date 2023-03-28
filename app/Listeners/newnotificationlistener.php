<?php

namespace App\Listeners;

use App\Notifications\newordernotifaucation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class newnotificationlistener
{

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(newordernotifaucation $notification)
    {
        $user = $notification->user;
        $user->notify(new ConfirmationNotification());
    }
}
