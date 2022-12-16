<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PorsonsNotification extends Notification
{
    use Queueable;
    public $persons;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($persons)
    {
        $this->persons = $persons;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Persons Name: '.$this->persons->name)
                    ->line('Persons Country: '.$this->persons->country)
                    ->line('Persons City: '.$this->persons->city)
                    ->action('New person was added Show now', url('/single',$this->persons->id))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
