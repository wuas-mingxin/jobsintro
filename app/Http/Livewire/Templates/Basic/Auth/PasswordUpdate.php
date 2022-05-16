<?php

namespace App\Http\Livewire\Templates\Basic\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordUpdate extends Component
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

    public $currentPassword;
    public $newPassword;
    public $confirmPassword;
    public $towFactor;

    public function changePassword()
    {
        $user = Auth::user();

        $user->password = Hash::make($this->newPassword);
        $user->two_factor = $this->towFactor;

        dd($this->currentPassword);

        $user->save();
        $notify[] = ['success', 'Password Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function render()
    {
        $data = [
            'page_title' => 'Change Password',
            'user' => Auth::user()
        ];
        return view('livewire.' . $this->activeTemplate . 'auth.password-update', $data);
    }
}
