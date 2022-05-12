@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        {{-- @include($activeTemplate . 'partials.setting_header')

        <div class="grid lg:grid-cols-3 mt-12 gap-8">
            <div>
                <h3 class="text-xl mb-2 font-semibold"> Basic</h3>
                <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
            </div>
            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                <form action="{{ route('user.setting.generalSetting.store') }}" method="post">
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

        </div> --}}

        <div class="mb-6">
            <h2 class="text-2xl font-semibold"> {{ $page_title }} </h2>
        </div>

        <div class="bg-white lg:divide-x lg:flex lg:shadow-md rounded-md shadow lg:rounded-xl overflow-hidden lg:m-0 -mx-4">
            @include($activeTemplate . 'partials.setting_bar')

            <div class="lg:w-2/3">

                <div class="lg:flex lg:flex-col justify-between lg:h-full">

                    <!-- form header -->
                    <div class="lg:px-10 lg:py-8 p-6">
                        <h3 class="font-bold mb-2 text-xl">{{ $page_title }}</h3>
                    </div>

                    <!-- form body -->
                    <form action="{{ route('user.setting.generalSetting.store') }}" method="post">
                        @csrf
                        <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                            <div class="line">
                                <input class="line__input" id="username" autocomplete="off" name="username" type="text" onkeyup="this.setAttribute('value', this.value);" value="{{ $user->username }}">
                                <span for="username" class="line__placeholder">@lang('Username')</span>
                            </div>
                            <div class="line">
                                <input class="line__input" id="phone" autocomplete="off" name="phone" type="text" onkeyup="this.setAttribute('value', this.value);" value="{{ $user->phone }}">
                                <span for="phone" class="line__placeholder"> @lang('Phone') </span>
                            </div>
                            <div class="line">
                                <input class="line__input" id="email" autocomplete="off" name="email" type="text" onkeyup="this.setAttribute('value', this.value);" value="{{ $user->email }}" disabled="">
                                <span for="email" class="line__placeholder">@lang('Email') </span>
                            </div>
                            <div class="line">
                                <input class="line__input" id="birthday" autocomplete="off" name="birthday" type="date" onkeyup="this.setAttribute('value', this.value);" value="{{ $user->birthday }}">
                                <span for="birthday" class="line__placeholder">@lang('Birthday') </span>
                            </div>
                            <div>
                                <label for="country"> @lang('Country') </label>
                                <select id="country" name="country"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->country == 0) selected @endif >@lang('Select One Country...')</option>
                                    @foreach($countries as $key => $country)
                                        <option value="{{ $key }}" @if($user->country == $key ) selected @endif>{{ __($country->country) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="gender"> @lang('Gender') </label>
                                <select id="gender" name="gender"  class="shadow-none selectpicker with-border ">
                                    <option value="1" @if($user->gender == 1) selected @endif >Male</option>
                                    <option value="2" @if($user->gender == 2) selected @endif >Female</option>
                                    <option value="3" @if($user->gender == 3) selected @endif >Rather Not Say</option>
                                </select>
                            </div>
                            <div class="line">
                                <label>Verification</label>
                                        
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
                            </div>
                            <div>
                                <label for="member_type"> @lang('Member Type') </label>
                                <select id="member_type" name="member_type"  class="shadow-none selectpicker with-border ">
                                    <option value="1" @if($user->gender == 1) selected @endif >Free Member</option>
                                    <option value="2" @if($user->gender == 2) selected @endif >Star Member</option>
                                    <option value="3" @if($user->gender == 3) selected @endif >Hot Member</option>
                                    <option value="4" @if($user->gender == 4) selected @endif >Ultima Member</option>
                                    <option value="5" @if($user->gender == 5) selected @endif >VIP Member</option>
                                </select>
                            </div>
                            <div class="line">
                                <input class="line__input" id="wallet" autocomplete="off" name="wallet" type="date" onkeyup="this.setAttribute('value', this.value);" value="{{ $user->wallet }}">
                                <span for="wallet" class="line__placeholder">@lang('Wallet') </span>
                            </div>

                        </div>

                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> @lang('Cancel') </button>
                            <button type="submit" class="button bg-blue-700"> @lang('Save') </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
