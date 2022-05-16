@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

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
                        <p>Notify me when</p>
                    </div>

                    <!-- form body -->
                    <form action="{{ route('user.setting.notify.update') }}" method="post" id="password_validate">
                        @csrf
                        <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone liked my posts</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_like" @if($user->e_like == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone Commented on my posts</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_commented" @if($user->e_commented == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone shared my posts</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_shared" @if($user->e_shared == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone followed me</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_followed" @if($user->e_followed == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone liked my pages</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_liked_page" @if($user->e_liked_page == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone visited my profile</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_visited" @if($user->e_visited == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone mentioned me</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_mentioned" @if($user->e_mentioned == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone joined my groups</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_joined_group" @if($user->e_joined_group == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone accepted my friend/follow request</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_accepted" @if($user->e_accepted == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Someone posted on my timeline</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_profile_wall_post" @if($user->e_profile_wall_post == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> You have remembrance on this day</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="e_memory" @if($user->e_memory == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button type="submit" class="button bg-blue-700"> Save </button>
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