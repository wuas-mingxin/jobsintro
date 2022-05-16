<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\WuasPost;

class WuasUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'page_title' => 'home'
        ];


        return view($this->activeTemplate . 'user.home', $data);
    }

    public function generalSetting()
    {
        $data = [
            'page_title' => 'Settings',
            'countries' => json_decode(file_get_contents(resource_path('views/partials/country.json'))),
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.general_setting', $data);
    }

    public function generalSettingStore(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'username' => 'required|max:32',
            'birthday' => 'required',
            'country' => 'required',
            'gender' => 'required',
        ]);

        // if ($request->phone != $user->phone && User::where('phone', $request->phone)->whereId('!=', $user->id)->count() > 0) {
        //     $notify[] = ['error', 'Phone number already exists.'];
        //     return back()->withNotify($notify);
        // }

        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->country = $request->country;
        $user->gender = $request->gender;
        $user->verified = isset($request->verified) ? '1':'0';
        //dd($user);
        $user->save();
        $notify[] = ['success', 'General Settings Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function profileSetting()
    {
        $data = [
            'page_title' => 'Profile Settings',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.profile', $data);
    }

    public function profileSettingStore(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60'
        ]);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->about = $request->aboutme;
        $user->last_location_update = $request->location;
        $user->school  = $request->school;
        $user->school_completed = isset($request->schoolcompleted) ? 1:0;
        $user->working = $request->working;
        $user->working_link = $request->working_link;
        $user->website = $request->website;
        $user->relationship_id = $request->relationship;

        // dd($user);

        $user->save();
        $notify[] = ['success', 'Profile Settings Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function privacySetting()
    {
        $data = [
            'page_title' => 'Privacy Setting',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.privacy', $data);
    }

    public function privacySettingStore(Request $request)
    {
        $user = Auth::user();

        $user->follow_privacy = $request->follow_privacy;
        $user->message_privacy = $request->message_privacy;
        $user->friend_privacy = $request->friend_privacy;
        $user->post_privacy = $request->post_privacy;
        $user->birth_privacy = $request->birth_privacy;
        $user->confirm_followers = $request->confirm_followers;
        $user->show_activities_privacy = $request->show_activities_privacy;
        $user->status = $request->chat_status;
        $user->share_my_location = $request->share_my_location;
        $user->share_my_data = $request->share_my_data;

        // dd($user);

        $user->save();
        $notify[] = ['success', 'Privacy Settings Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function password()
    {
        $data = [
            'page_title' => 'Change Password',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.password_update', $data);
    }

    public function passwordUpdate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user->password = Hash::make($request->password);
        $user->two_factor = $request->two_factor;

        // dd($user);

        $user->save();
        $notify[] = ['success', 'Password Updated successfully.'];
        return back()->withNotify($notify);
    }
}
