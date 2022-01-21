<?php
namespace App\Notifications;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;

    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        return (new MailMessage)
            ->subject('Successful registration')
            ->line('Thank you for registering in zoe, please, click on the following button to verify your email!')
            ->action('Verify Email Address',$this->verificationUrl($notifiable))
            ->line('If you did not create an account, no further action is required.');
    }
}