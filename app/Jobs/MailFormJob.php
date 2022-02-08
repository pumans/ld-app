<?php

namespace App\Jobs;

use App\Mail\EmailForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MailFormJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $mail;
    protected $request;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail, $request)
    {
        $this->mail = $mail;
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->mail->email)->send(new EmailForm( $this->request->validated() ) );
    }
}
