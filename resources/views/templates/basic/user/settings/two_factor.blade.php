@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        {{-- @include($activeTemplate . 'partials.setting_header')

        <div class="grid lg:grid-cols-1 mt-12 gap-8">
            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                <form action="{{ route('user.setting.twofactor.update') }}" method="post" id="password_validate">
                    @csrf

                    <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

                        <div class="col-span-2">
                            <label>Two-factor authentication</label>
                            <select id="two_factor" name="two_factor" class="shadow-none selectpicker with-border ">
                                <option value="1" @if($user->two_factor == 1) selected @endif >Enable</option>
                                <option value="0" @if($user->two_factor == 0) selected @endif >Disable</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <p>Turn on 2-step login to level-up your account's security, Once turned on, you'll use both your password and a 6-digit security code sent to your phone or email to log in.</p>
                        </div>

                    </div>

                    <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
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
                    <form action="{{ route('user.setting.twofactor.update') }}" method="post" id="password_validate">
                        @csrf
                        <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                            <div>
                                <label for="two_factor"> @lang('Two-factor authentication') </label>
                                <select id="two_factor" name="two_factor"  class="shadow-none selectpicker with-border ">
                                    <option value="1" @if($user->two_factor == 1) selected @endif >Enable</option>
                                    <option value="0" @if($user->two_factor == 0) selected @endif >Disable</option>
                                </select>
                            </div>

                            <div>
                                <p>Turn on 2-step login to level-up your account's security, Once turned on, you'll use both your password and a 6-digit security code sent to your phone or email to log in.</p>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@push('javascript')
<script src="{{ asset($activeTemplateTrue . 'assets/js/checkpassword.js') }}"></script>
    
@endpush