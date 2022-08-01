<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;

class Notifications extends Component
{

    protected $listeners = ['totalNotifications'];
    public $notifications;
    public $totalNotifications;
    public function totalNotifications()
    {
        $this->totalNotifications = count(auth()->user()->unreadNotifications);
    }

    public function render()
    {
        $this->notifications = auth()->user()->notifications;
        $this->totalNotifications = count(auth()->user()->unreadNotifications);
        return view('livewire.'.activeTemplate().'notifications',[
            'notifications'=>$this->notifications,
            'totalNotifications'=>$this->totalNotifications
        ]);
    }
}
