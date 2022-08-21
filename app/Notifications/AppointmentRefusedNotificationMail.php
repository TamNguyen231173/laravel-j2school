<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentRefusedNotificationMail extends Notification
{
    use Queueable;

    private $customer;

    public function __construct($customer)
    {
        $this->customer = $customer[0];
    }


    public function via($notifiable)
    {
        return ['mail'];
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Xin chào anh/chị' . $this->customer->name_patient)
            ->line('Lịch hẹn của anh chị đã bị huỷ bỏ')
//            ->action('Notification Action', url('/'))
            ->line('Cảm ơn!');
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
