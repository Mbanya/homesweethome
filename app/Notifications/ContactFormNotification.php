<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormNotification extends Notification
{
    use Queueable;

    protected mixed $data;

    /**
     * Create a new notification instance.
     */
    public function __construct($validatedData)
    {
        $this->data = $validatedData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Dear Home Sweet Home,')
            ->line('You have received a message from your contact form')
            ->line('Details: ')
            ->line('Name:' . $this->data['name'])
            ->line('Email: '. $this->data['email'])
            ->line('Phone: '. $this->data['phone'])
            ->line('Message: '. $this->data['message'])
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
