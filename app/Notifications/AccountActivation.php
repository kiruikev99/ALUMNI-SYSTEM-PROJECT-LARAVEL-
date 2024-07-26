<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AccountActivation extends Notification
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $activationUrl = url('/activate/' . $this->user->id . '/' . sha1($this->user->email));

        return (new MailMessage)
            ->subject('Activate Your Account')
            ->line('Dear ' . $this->user->name . ',')
            ->line('Please click the button below to activate your account.')
            ->action('Activate Account', $activationUrl)
            ->line('Thank you for using our application!');
    }
}
