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
                <form action="{{ route('user.profileSetting.store') }}" method="post">
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

        </div>

    </div>
</div>
@endsection