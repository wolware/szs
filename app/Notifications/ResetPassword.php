<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Promjena šifre | SZS')
            ->greeting('Pozdrav!')
            ->line('Primili ste ovaj email jer ste poslali zahtjev za promjenu šifre na vašem SZS računu.')
            ->action('Promjeni šifru', url('password/reset', $this->token))
            ->line('Ukoliko niste zatražili novu šifru, daljne akcije nisu potrebne.')
            ->salutation('Lijep pozdrav,')
            ->salutation('Vaš Sve za sport tim.');
    }
}