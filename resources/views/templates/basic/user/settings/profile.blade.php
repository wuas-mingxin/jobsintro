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
                <form action="{{ route('user.setting.profileSetting.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

                        <div>
                            <label for="firstname"> First name</label>
                            <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}" placeholder="*Emma" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="lastname"> Last name</label>
                            <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}" placeholder="*Watson" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div class="col-span-2">
                            <label for="aboutme"> About Me</label>
                            <textarea id="aboutme" name="aboutme" placeholder="Write about yourself" rows="3" class="shadow-none with-border">{{ $user->about }}</textarea>
                        </div>

                        <div class="col-span-2">
                            <label for="location"> Location</label>
                            <input type="text" id="location" name="location" value="{{ $user->last_location_update }}" placeholder="Enter a location" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="school"> School</label>
                            <input type="text" id="school" name="school" value="{{ $user->school }}" placeholder="Enter a school" autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <h4> Completed</h4>
                            </div>
                            <div class="switches-list -mt-8 is-large">
                                <div class="switch-container">
                                    <label class="switch">
                                        <input type="checkbox" name="schoolcompleted" @if($user->school_completed == 1) checked @endif >
                                        <span class="switch-button"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="working"> Working at</label>
                            <input type="text" id="working" name="working" value="{{ $user->working }}" placeholder="eg Apple" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="working_link"></label>
                            <input type="text" id="working_link" name="working_link" value="{{ $user->working_link }}" placeholder="Comlpany Website" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="website"> Website</label>
                            <input type="text" id="website" name="website" value="{{ $user->website }}" placeholder="eg www.google.com" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="relationship"> Relationship </label>
                            <select id="relationship" name="relationship" class="shadow-none selectpicker with-border ">
                                <option value="0" @if($user->relationship_id == 0) selected @endif >None</option>
                                <option value="1" @if($user->relationship_id == 1) selected @endif >Single</option>
                                <option value="2" @if($user->relationship_id == 2) selected @endif >In a relationship</option>
                                <option value="3" @if($user->relationship_id == 3) selected @endif >Married</option>
                                <option value="4" @if($user->relationship_id == 4) selected @endif >Engaged</option>
                            </select>
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
                    <form action="{{ route('user.setting.profileSetting.store') }}" method="post">
                        @csrf
                        <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                            <div class="line">
                                <input class="line__input" id="firstname" autocomplete="off" name="firstname" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="*Emma" value="{{ $user->firstname }}">
                                <span for="firstname" class="line__placeholder">@lang('First name')</span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="lastname" autocomplete="off" name="lastname" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="*Watson" value="{{ $user->lastname }}">
                                <span for="lastname" class="line__placeholder"> @lang('Last Name') </span>
                            </div>

                            <div class="line">
                                <textarea class="line__input" id="aboutme" autocomplete="off" name="aboutme" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Write about yourself" rows="3">{{ $user->about }}</textarea>
                                <span for="aboutme" class="line__placeholder"> @lang('About Me') </span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="location" autocomplete="off" name="location" onkeyup="this.setAttribute('value', this.value);" value="{{ $user->last_location_update }}">
                                <span for="location" class="line__placeholder">@lang('Location') </span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="school" autocomplete="off" name="school" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Enter a school" value="{{ $user->school }}">
                                <span for="school" class="line__placeholder">@lang('School') </span>
                            </div>

                            <div class="line">
                                <label>Completed</label>
                                        
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Verified</h4>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch">
                                                <input type="checkbox" name="schoolcompleted" @if($user->school_completed == 1) checked @endif >
                                                <span class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <input class="line__input" id="working" autocomplete="off" name="working" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="eg Apple" value="{{ $user->working }}">
                                <span for="working" class="line__placeholder">@lang('Working at') </span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="working_link" autocomplete="off" name="working_link" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Comlpany Website" value="{{ $user->working_link }}">
                                <span for="working_link" class="line__placeholder">@lang('Comlpany Website') </span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="website" autocomplete="off" name="website" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Comlpany Website" value="{{ $user->website }}">
                                <span for="website" class="line__placeholder">@lang('Website') </span>
                            </div>

                            <div>
                                <label for="relationship"> @lang('Relationship') </label>
                                <select id="relationship" name="relationship"  class="shadow-none selectpicker with-border ">
                                    <option value="0" @if($user->relationship_id == 0) selected @endif >None</option>
                                    <option value="1" @if($user->relationship_id == 1) selected @endif >Single</option>
                                    <option value="2" @if($user->relationship_id == 2) selected @endif >In a relationship</option>
                                    <option value="3" @if($user->relationship_id == 3) selected @endif >Married</option>
                                    <option value="4" @if($user->relationship_id == 4) selected @endif >Engaged</option>
                                </select>
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