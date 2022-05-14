<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function checkPassword(Request $request)
    {
        $user = auth()->user();
        $current_pass = $request->current_password;
        $check_pass = User::where('id', $user->id)->first();
        if(Hash::check($current_pass, $check_pass->password)) {
            echo "true"; die;
        } else {
            echo "false"; die;
        }
    }

    public function manageSessions()
    {
        $data = [
            'page_title' => 'Manage Sessions',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.manage_sessions', $data);
    }

    public function twofactor()
    {
        $data = [
            'page_title' => 'Two Factor Authentication',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.two_factor', $data);
    }

    public function twofactorUpdate(Request $request)
    {
        $user = Auth::user();

        $user->two_factor = $request->two_factor;

        // dd($user);

        $user->save();
        $notify[] = ['success', 'Two Factor Authentication Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function socialinks()
    {
        $data = [
            'page_title' => 'Social Links',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.socialinks', $data);
    }

    public function socialinksUpdate(Request $request)
    {
        $user = Auth::user();

        $user->facebook = $request->facebook;
        $user->youtube = $request->youtube;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->linkedin = $request->linkedin;
        $user->vk = $request->vk;

        $user->save();
        $notify[] = ['success', 'Social Links Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function notifications()
    {
        $data = [
            'page_title' => 'Notification Settings',
            'user' => Auth::user()
        ];

        return view($this->activeTemplate . 'user.settings.notifications', $data);
    }

    public function notificationsUpdate(Request $request)
    {
        $user = Auth::user();

        $user->e_like = isset($request->e_like) ? '1':'0';
        $user->e_commented = isset($request->e_commented) ? '1':'0' ;
        $user->e_shared = isset($request->e_shared) ? '1':'0';
        $user->e_followed = isset($request->e_followed) ? '1':'0';
        $user->e_liked_page = isset($request->e_liked_page) ? '1':'0';
        $user->e_visited = isset($request->e_visited) ? '1':'0';
        $user->e_mentioned = isset($request->e_mentioned) ? '1':'0';
        $user->e_joined_group = isset($request->e_joined_group) ? '1':'0';
        $user->e_accepted = isset($request->e_accepted) ? '1':'0';
        $user->e_profile_wall_post = isset($request->e_profile_wall_post) ? '1':'0';
        $user->e_memory = isset($request->e_memory) ? '1':'0';

        $user->save();
        $notify[] = ['success', 'Notification Settings Updated successfully.'];
        return back()->withNotify($notify);
    }

    public function aadFriendList()
    {
        $data = [
            'page_title' => 'Add Friend',
        ];

        return view($this->activeTemplate . 'user.add_friend', $data);
    }

    public function followFriend()
    {
        $data = [
            'page_title' => 'Follow Friend',
        ];

        return view($this->activeTemplate . 'user.follow', $data);
    }
}
