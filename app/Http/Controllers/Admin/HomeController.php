<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Dashboard'
        ];
        return view('admin.dashboard', $data);
    }

    public function profile()
    {
        $data = [
            'pageTitle' => 'Profile',
            'admin' => auth('admin')->user()
        ];
        return view('admin.profile', $data);
    }

    public function password()
    {
        $data = [
            'pageTitle' => 'Password Setting',
            'admin' => auth('admin')->user()
        ];

        return view('admin.password', $data);
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = auth('admin')->user();
        if (!Hash::check($request->old_password, $user->password)) {
            $notify[] = ['error', 'Password doesn\'t match!!'];
            return back()->withNotify($notify);
        }
        $user->password = bcrypt($request->password);
        $user->save();
        $notify[] = ['success', 'Password changed successfully.'];
        return redirect()->route('admin.password')->withNotify($notify);
    }
}
