<?php

namespace App\listeners;

use App\Events\EmailSent;
use App\Jobs\MailFormJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewEmailNotification
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
     * @param  EmailSent  $event
     * @return void
     */
    public function handle(EmailSent $event)
    {
        dispatch(new MailFormJob($event));
    }
}
