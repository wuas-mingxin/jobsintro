<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;

class Notifications extends Component
{

    protected $listeners = ['liked'];
    public $notifications;
    public function liked()
    {
        $this->notifications = auth()->user()->notifications;
    }
    public function render()
    {
        $this->notifications = auth()->user()->notifications;
        return view('livewire.templates.basic.notifications',['notifications'=>$this->notifications]);
    }
}
