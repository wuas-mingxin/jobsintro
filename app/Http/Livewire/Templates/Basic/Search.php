<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;
use App\Models\User;

class Search extends Component
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }

    public $search = '';
    public $users;

    public function updatingSearch(){
        if(!empty($this->search)){
            $this->users = User::where('firstname', 'like', '%'. $this->search .'%')->orWhere('lastname', 'like', '%'. $this->search .'%')->orWhere('username', 'like', '%'. $this->search .'%')->where('account_status', '1')->get();
        }
    }
    public function render()
    {
        return view('livewire.' . $this->activeTemplate . 'search');
    }
}
