@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        {{-- @include($activeTemplate . 'partials.setting_header')

        <div class="grid lg:grid-cols-1 mt-12 gap-8">
            <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                <form action="{{ route('user.setting.socialinks.update') }}" method="post" id="password_validate">
                    @csrf

                    <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

                        <div class="">
                            <label for="facebook">Facebook</label>
                            <input type="text" id="facebook" name="facebook" placeholder="Username" value="{{ $user->facebook }}" required autocomplete="off" class="shadow-none with-border">
                            <span id="pwdChk"></span>
                        </div>

                        <div>
                            <label for="twitter">Twitter</label>
                            <input type="text" id="twitter" name="twitter" placeholder="Username" value="{{ $user->twitter }}" required autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="vk">Vkontakte</label>
                            <input type="text" id="vk" name="vk" placeholder="Username" value="{{ $user->vk }}" required autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="linkedin">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" placeholder="Username" value="{{ $user->linkedin }}" required autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="instagram">Instagram</label>
                            <input type="text" id="instagram" name="instagram" placeholder="Username" value="{{ $user->instagram }}" required autocomplete="off" class="shadow-none with-border">
                        </div>

                        <div>
                            <label for="youtube">YouTube</label>
                            <input type="text" id="youtube" name="youtube" placeholder="Username" value="{{ $user->youtube }}" required autocomplete="off" class="shadow-none with-border">
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
                    <form action="{{ route('user.setting.socialinks.update') }}" method="post" id="password_validate">
                        @csrf
                        <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                            <div class="line">
                                <input class="line__input" id="facebook" autocomplete="off" name="facebook" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Username" value="{{ $user->facebook }}">
                                <span for="facebook" class="line__placeholder">@lang('Facebook')</span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="twitter" autocomplete="off" name="twitter" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Username" value="{{ $user->twitter }}">
                                <span for="twitter" class="line__placeholder">@lang('Twitter')</span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="vk" autocomplete="off" name="vk" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Username" value="{{ $user->vk }}">
                                <span for="vk" class="line__placeholder">@lang('Vkontakte')</span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="linkedin" autocomplete="off" name="linkedin" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Username" value="{{ $user->linkedin }}">
                                <span for="linkedin" class="line__placeholder">@lang('Linkedin')</span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="instagram" autocomplete="off" name="instagram" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Username" value="{{ $user->instagram }}">
                                <span for="instagram" class="line__placeholder">@lang('Instagram')</span>
                            </div>

                            <div class="line">
                                <input class="line__input" id="youtube" autocomplete="off" name="youtube" type="text" onkeyup="this.setAttribute('value', this.value);" placeholder="Username" value="{{ $user->youtube }}">
                                <span for="youtube" class="line__placeholder">@lang('YouTube')</span>
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