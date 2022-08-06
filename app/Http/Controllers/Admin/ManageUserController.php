<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    public function allUsers()
    {
        $data = [
            'pageTitle' => 'All Users',
            'users' => $this->userData(),
            'emptyMessage' => 'No records found'
        ];

        return view('admin.users.list', $data);
    }

    public function activeUsers()
    {
        $data = [
            'pageTitle' => 'Active Users',
            'users' => $this->userData('active'),
            'emptyMessage' => 'No records found'
        ];

        return view('admin.users.list', $data);
    }

    public function bannedUsers()
    {
        $data = [
            'pageTitle' => 'Banned Users',
            'users' => $this->userData('banned'),
            'emptyMessage' => 'No records found'
        ];

        return view('admin.users.list', $data);
    }

    public function usersWithBalance()
    {
        $data = [
            'pageTitle' => 'Users with Balance',
            'users' => $this->userData('withBalance'),
            'emptyMessage' => 'No records found'
        ];

        return view('admin.users.list', $data);
    }

    protected function userData($scope = null){
        if ($scope) {
            $users = User::$scope();
        }else{
            $users = User::query();
        }

        //search
        $request = request();
        if ($request->search) {
            $search = $request->search;
            $users  = $users->where(function ($user) use ($search) {
                            $user->where('username', 'like', "%$search%")
                                ->orWhere('email', 'like', "%$search%");
                      });
        }
        return $users->orderBy('id','desc')->paginate(getPaginate());
    }

    public function detail($id)
    {
        $user = User::findOrFail($id);

        $data = [
            'user' => $user,
            'pageTitle' => 'User Detail - ' . $user->username,
            'countries' => json_decode(file_get_contents(resource_path('views/partials/country.json')))
        ];

        return view('admin.users.detail', $data);
    }

    public function login($id){
        Auth::loginUsingId($id);
        return redirect()->route('user.home');
    }

    public function status(Request $request,$id)
    {
        $user = User::findOrFail($id);
        if ($user->status == 1) {
            $request->validate([
                'reason'=>'required|string|max:255'
            ]);
            $user->status = 0;
            $user->ban_reason = $request->reason;
            $notify[] = ['success','User banned successfully'];
        }else{
            $user->status = 1;
            $user->ban_reason = null;
            $notify[] = ['success','User unbanned successfully'];
        }
        $user->save();
        return back()->withNotify($notify);

    }
}
