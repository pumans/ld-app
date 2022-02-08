<?php

namespace App\Listeners;

use App\Notifications\ThanksVerifiedNotification;
use App\Providers\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class VerifiedEmailNotification
{

    /**
     * Handle the event.
     *
     * @param  \App\Providers\Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $event->user->notify(new ThanksVerifiedNotification());
    }
}
