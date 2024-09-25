<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFactorCode extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('mensaje de verificacion')
                    ->line('Su codigo de verificacion es: '. $notifiable->code)
                    ->action('Confirmar inicio de sesion', route('verify.index'))
                    ->line('=============================');

    }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
