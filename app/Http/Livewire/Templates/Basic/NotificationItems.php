<?php

namespace App\Http\Livewire\Templates\Basic;

use Carbon\Carbon;
use App\Models\Notification;
use Livewire\Component;

class NotificationItems extends Component
{
    public $notifications;
    protected $listeners = ['getNotifications' => 'getNotifications'];

    public function getNotifications(){
        $this->totalNotifications = count(auth()->user()->notifications);
        if(count($this->notifications) < $this->totalNotifications){
            $this->notifications = auth()->user()->notifications;    
            $this->emit('totalNotifications');
        }
    }
    public function readNotification(Notification $notification){
        $notification->read_at = Carbon::now();
        $notification->save();
        $this->emit('totalNotifications');
    }

    public function render()
    {
        $this->notifications = auth()->user()->notifications;
        return view('livewire.'.activeTemplate().'notification-items',['notifications'=>$this->notifications]);
    }
}
