<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    protected $formData = [];
    /**
     * Create a new message instance.
     * на основании реквеста (данные, написанные пользователем) создаются переменные,
     * которые потом отправляем методом build()
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     * рендерится вью уведомление, в которое передаются параметры (поля из формы)
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email_contact_form')->with($this->formData);
    }
}
