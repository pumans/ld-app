<?php

namespace App\Listeners;

use App\Notifications\ThanksVerifiedNotification;
use \Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class VerifiedEmailNotification
{

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $event->user->notify(new ThanksVerifiedNotification());
    }
}
