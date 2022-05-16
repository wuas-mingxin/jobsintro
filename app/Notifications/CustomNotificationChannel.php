<?php
namespace App\Notifications;
 
use Illuminate\Notifications\Notification;
 
class CustomNotificationChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
      $data = $notification->toCustomNotification($notifiable);
     
      return $notifiable->routeNotificationFor('database')->create([
        'id' => $notification->id,
        //customize here
        'notification_by' =>$notifiable->notification_by , //<-- comes from toDatabase() Method below
        'type' => get_class($notification),
        'data' => $data,
        'read_at' => null,
      ]);
        // Send notification to the $notifiable instance...
    }
}

?>