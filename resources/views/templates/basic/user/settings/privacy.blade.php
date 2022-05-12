@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        {{-- @include($activeTemplate . 'partials.setting_header')

        <div class="grid lg:grid-cols-3 mt-12 gap-8">
            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                <form action="{{ route('user.setting.privacySetting.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

                        <div class="col-span-2">
                            <label>Who can follow me?</label>
                            <select id="follow_privacy" name="follow_privacy" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->follow_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->follow_privacy == 1) selected @endif >People I Follow</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Who can messages me?</label>
                            <select id="message_privacy" name="message_privacy" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->message_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->message_privacy == 1) selected @endif >People I Follow</option>
                                <option value="2" @if($user->message_privacy == 2) selected @endif >No Body</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Who can see my friends?</label>
                            <select id="friend_privacy" name="friend_privacy" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->friend_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->friend_privacy == 1) selected @endif >People I Follow</option>
                                <option value="2" @if($user->friend_privacy == 2) selected @endif >People Follow Me</option>
                                <option value="3" @if($user->friend_privacy == 3) selected @endif >No body</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Who can post on my timeline?</label>
                            <select id="post_privacy" name="post_privacy" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->post_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->post_privacy == 1) selected @endif >People I Follow</option>
                                <option value="2" @if($user->post_privacy == 2) selected @endif >No body</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Who can see my birthday?</label>
                            <select id="birth_privacy" name="birth_privacy" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->birth_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->birth_privacy == 1) selected @endif >People I Follow</option>
                                <option value="2" @if($user->birth_privacy == 2) selected @endif >No body</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Confirm request when someone follows you?</label>
                            <select id="confirm_followers" name="confirm_followers" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->confirm_followers == 0) selected @endif >No</option>
                                <option value="1" @if($user->confirm_followers == 1) selected @endif >Yes</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Show my activies?</label>
                            <select id="show_activities_privacy" name="show_activities_privacy" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->show_activities_privacy == 0) selected @endif >No</option>
                                <option value="1" @if($user->show_activities_privacy == 1) selected @endif >Yes</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Status</label>
                            <select id="chat_status" name="chat_status" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->status == 0) selected @endif >Online</option>
                                <option value="1" @if($user->status == 1) selected @endif >Offline</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Show my location with public?</label>
                            <select id="share_my_location" name="share_my_location" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->share_my_location == 0) selected @endif >No</option>
                                <option value="1" @if($user->share_my_location == 1) selected @endif >Yes</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label>Allow search engines to index my profile and posts?</label>
                            <select id="share_my_data" name="share_my_data" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->share_my_data == 0) selected @endif >No</option>
                                <option value="1" @if($user->share_my_data == 1) selected @endif >Yes</option>
                            </select>
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
                    <form action="{{ route('user.setting.privacySetting.store') }}" method="post">
                        @csrf
                        <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                            <div>
                                <label for="follow_privacy"> @lang('Who can follow me?') </label>
                                <select id="follow_privacy" name="follow_privacy"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->follow_privacy == 0) selected @endif >Everyone</option>
                                    <option value="1" @if($user->follow_privacy == 1) selected @endif >People I Follow</option>
                                </select>
                            </div>

                            <div>
                                <label for="message_privacy"> @lang('Who can messages me?') </label>
                                <select id="message_privacy" name="message_privacy"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->message_privacy == 0) selected @endif >Everyone</option>
                                    <option value="1" @if($user->message_privacy == 1) selected @endif >People I Follow</option>
                                    <option value="2" @if($user->message_privacy == 2) selected @endif >No Body</option>
                                </select>
                            </div>

                            <div>
                                <label for="friend_privacy"> @lang('Who can see my friends?') </label>
                                <select id="friend_privacy" name="friend_privacy"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->friend_privacy == 0) selected @endif >Everyone</option>
                                    <option value="1" @if($user->friend_privacy == 1) selected @endif >People I Follow</option>
                                    <option value="2" @if($user->friend_privacy == 2) selected @endif >People Follow Me</option>
                                    <option value="3" @if($user->friend_privacy == 3) selected @endif >No body</option>
                                </select>
                            </div>

                            <div>
                                <label for="post_privacy"> @lang('Who can post on my timeline?') </label>
                                <select id="post_privacy" name="post_privacy"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->post_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->post_privacy == 1) selected @endif >People I Follow</option>
                                <option value="2" @if($user->post_privacy == 2) selected @endif >No body</option>
                                </select>
                            </div>

                            <div>
                                <label for="birth_privacy"> @lang('Who can see my birthday?') </label>
                                <select id="birth_privacy" name="birth_privacy"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->birth_privacy == 0) selected @endif >Everyone</option>
                                <option value="1" @if($user->birth_privacy == 1) selected @endif >People I Follow</option>
                                <option value="2" @if($user->birth_privacy == 2) selected @endif >No body</option>
                                </select>
                            </div>

                            <div>
                                <label for="confirm_followers"> @lang('Confirm request when someone follows you?') </label>
                                <select id="confirm_followers" name="confirm_followers"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->confirm_followers == 0) selected @endif >No</option>
                                    <option value="1" @if($user->confirm_followers == 1) selected @endif >Yes</option>
                                </select>
                            </div>

                            <div>
                                <label for="show_activities_privacy"> @lang('Show my activies?') </label>
                                <select id="show_activities_privacy" name="show_activities_privacy"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->show_activities_privacy == 0) selected @endif >No</option>
                                <option value="1" @if($user->show_activities_privacy == 1) selected @endif >Yes</option>
                                </select>
                            </div>

                            <div>
                                <label for="chat_status"> @lang('Status') </label>
                                <select id="chat_status" name="chat_status"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->status == 0) selected @endif >Online</option>
                                    <option value="1" @if($user->status == 1) selected @endif >Offline</option>
                                </select>
                            </div>

                            <div>
                                <label for="share_my_location"> @lang('Show my location with public?') </label>
                                <select id="share_my_location" name="share_my_location"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->share_my_location == 0) selected @endif >No</option>
                                    <option value="1" @if($user->share_my_location == 1) selected @endif >Yes</option>
                                </select>
                            </div>

                            <div>
                                <label for="share_my_data"> @lang('Allow search engines to index my profile and posts?') </label>
                                <select id="share_my_data" name="share_my_data"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->share_my_data == 0) selected @endif >No</option>
                                    <option value="1" @if($user->share_my_data == 1) selected @endif >Yes</option>
                                </select>
                            </div>

                        </div>

                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button type="submit" class="button bg-blue-700"> @lang('Save') </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

