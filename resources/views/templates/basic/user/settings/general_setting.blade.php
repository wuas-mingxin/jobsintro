@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        @include($activeTemplate . 'partials.setting_header')

        <div class="grid lg:grid-cols-3 mt-12 gap-8">
            <div>
                <h3 class="text-xl mb-2 font-semibold"> Basic</h3>
                <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
            </div>
            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                <form action="{{ route('user.generalSetting.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                        <div>
                            <label for="username"> Username</label>
                            <input type="text" id="username" name="username" placeholder="Username" value="{{ $user->username }}" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="phone"> Phone</label>
                            <input type="text"id="phone"  name="phone" placeholder="Phone" value="{{ $user->phone }}" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div class="col-span-2">
                            <label for="email"> Email</label>
                            <input type="email" id="email" name="email" placeholder="E-mail" value="{{ $user->email }}" autocomplete="off" disabled="" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="birthday">Birthday</label>
                            <input type="date" id="birthday" name="birthday" value="{{ $user->birthday }}" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                                <label for="country">Country</label>
                                <select id="country" name="country"  class="shadow-none with-border">
                                    <option value="0" @if($user->country == 0) selected @endif >Select One Country...</option>
                                    @foreach($countries as $key => $country)
                                            <option value="{{ $key }}" @if($user->country == $key ) selected @endif>{{ __($country->country) }}</option>
                                        @endforeach
                                </select>
                        </div>

                        <div class="col-span-2">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender"  class="shadow-none with-border">
                                    <option value="1" @if($user->gender == 1) selected @endif >Male</option>
                                    <option value="2" @if($user->gender == 2) selected @endif >Female</option>
                                    <option value="3" @if($user->gender == 3) selected @endif >Rather Not Say</option>
                                </select>
                        </div>

                        <div class="col-span-2">
                            <label>Verification</label>
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <h4> Verified</h4>
                            </div>
                            <div class="switches-list -mt-8 is-large">
                                <div class="switch-container">
                                    <label class="switch">
                                        <input type="checkbox" name="verified" @if($user->verified == 1) checked @endif >
                                        <span class="switch-button"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="member_type">Member Type</label>
                            <select id="member_type" name="member_type"  class="shadow-none with-border">
                                <option value="1">Free Member</option>
                                <option value="2">Star Member</option>
                                <option value="3">Hot Member</option>
                                <option value="3">Ultima Member</option>
                                <option value="3">VIP Member</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label for="wallet"> Wallet</label>
                            <input type="text" id="wallet" name="wallet" placeholder="0.00" autocomplete="off" class="shadow-none with-border">
                        </div>
                    </div>

                    <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                        <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                        <button type="submit" class="button bg-blue-700"> Save </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection
