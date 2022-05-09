@extends($activeTemplate . 'layouts.user')
@section('content')
<div class="main_content">
    <div class="mcontainer">

        <!--  Feeds  -->
        <div class="lg:flex lg:space-x-10">
            <div class="lg:w-3/4 lg:px-20 space-y-7">

                <!-- user story -->
                <div class="user_story grid md:grid-cols-5 grid-cols-3 gap-2 lg:-mx-20 relative">

                    <a href="#create-post" uk-toggle="target: body ; cls: story-active">
                        <div class="single_story">
                            <img src="{{asset(auth()->user()->avtar)}}" alt="">
                            <div class="story-avatar">
                                <img src="{{asset(auth()->user()->avtar)}}" alt="{{auth()->user()->avtar}}"></div>
                            <div class="story-content"> <h4>{{auth()->user()->username}} </h4> </div>
                        </div>
                    </a>

                    <span class="absolute bg-white lg:flex items-center justify-center p-2 rounded-full
                    shadow-md text-xl w-9 z-10 uk-position-center-right -mr-4 hidden" uk-toggle="target: body ; cls: story-active">
                    <i class="icon-feather-chevron-right"></i></span>

                </div>

                <!-- create post -->
                <div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
                    <div class="flex space-x-3">
                        <img src="{{asset(auth()->user()->avtar)}}" class="w-10 h-10 rounded-full">
                        <input placeholder="What's Your Mind ? Hamse!" class="bg-gray-100 hover:bg-gray-200 flex-1 h-10 px-6 rounded-full">
                    </div>
                    <div class="grid grid-flow-col pt-3 -mx-1 -mb-1 font-semibold text-sm">
                        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer">
                            <svg class="bg-blue-100 h-9 mr-2 p-1.5 rounded-full text-blue-600 w-9 -my-0.5 hidden lg:block" data-tippy-placement="top" title="Tooltip" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Photo/Video
                        </div>
                        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer">
                            <svg class="bg-green-100 h-9 mr-2 p-1.5 rounded-full text-green-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                            Tag Friend
                        </div>
                        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer">
                            <svg class="bg-red-100 h-9 mr-2 p-1.5 rounded-full text-red-600 w-9 -my-0.5 hidden lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                             Fealing /Activity
                        </div>
                    </div>
                </div>

                <div id="posts"></div>

                <div class="flex justify-center mt-6">
                    <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                        Load more ..</a>
                </div>

            </div>
            <div class="lg:w-72 w-full">

                <a href="#birthdays" uk-toggle>
                    <div class="bg-white mb-5 px-4 py-3 rounded-md shadow">
                        <h3 class="text-line-through font-semibold mb-1"> Birthdays </h3>
                        <div class="-mx-2 duration-300 flex hover:bg-gray-50 px-2 py-2 rounded-md">
                            <img src="{{ asset($activeTemplateTrue . 'assets/images/icons/gift-icon.png')}}" class="w-9 h-9 mr-3" alt="">
                            <p class="line-clamp-2 leading-6"> <strong> Jessica Erica </strong> and <strong> two others </strong>
                                have a birthdays to day .
                            </p>
                        </div>
                    </div>
                </a>

                <h3 class="text-xl font-semibold"> Contacts </h3>
                <!-- Right Sidebar -->
                <div class="" uk-sticky="offset:80">

                    <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                        <ul uk-switcher="connect: #group-details; animation: uk-animation-fade">
                            <li class="uk-active"><a class="active" href="#0">  Friends  <span> 310 </span> </a></li>
                            <li><a href="#0">Groups</a></li>
                        </ul>
                    </nav>

                    <div class="contact-list">
                        <!--Right Sidebar Cotact Lists Item -->
                        <a href="#">
                            <div class="contact-avatar">
                                <img src="{{asset(auth()->user()->avtar)}}" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Talha Khan</div>
                        </a>

                        <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                            <div class="contact-list-box">
                                <div class="contact-avatar">
                                    <img src="{{asset(auth()->user()->avtar)}}" alt="">
                                    <span class="user_status status_online"></span>
                                </div>
                                <div class="contact-username">   Dennis Han</div>
                                <p>
                                    <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with
                                    <strong> Stella Johnson </strong> and <strong> 14 Others</strong>
                                </p>
                                <div class="contact-list-box-btns">
                                    <button type="button" class="button primary flex-1 block mr-2">
                                        <i class="uil-envelope mr-1"></i> Send message</button>
                                    <button type="button"  href="#" class="button secondary button-icon mr-2">
                                        <i class="uil-list-ul"> </i> </button>
                                    <button type="button" a href="#" class="button secondary button-icon">
                                        <i class="uil-ellipsis-h"> </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--Right Sidebar Cotact Lists Item End -->

                    </div>
                </div>
                <!-- Right Sidebar Ends -->
            </div>
        </div>

    </div>
</div>
@endsection

@section('birthday')
<!-- birthdays modal -->
<div id="birthdays" uk-modal>
    <div class="uk-modal-dialog uk-modal-body rounded-xl shadow-lg">
        <!-- close button -->
        <button class="uk-modal-close-default p-2.5 bg-gray-100 rounded-full m-3" type="button" uk-close></button>

        <div class="flex items-center space-x-3 mb-10">
            <ion-icon name="gift" class="text-yellow-500 text-xl bg-yellow-50 p-1 rounded-md"></ion-icon>
            <div class="text-xl font-semibold">   Today's birthdays </div>
        </div>

        <div class="space-y-6">
            <div class="sm:space-y-8 space-y-6 pb-2">

                <div class="flex items-center sm:space-x-6 space-x-3">
                    <img src="{{asset(auth()->user()->avtar)}}" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-3">
                            <div class="text-base font-semibold"> <a href="#">  Alex Dolgove </a> </div>
                            <div class="font-medium text-sm text-gray-400"> 19 years old</div>
                        </div>
                        <div class="relative">
                            <input type="text" name="" id="" class="with-border" placeholder="Write her on Timeline">
                            <ion-icon name="happy" class="absolute right-3 text-2xl top-1/4"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="flex items-center sm:space-x-6 space-x-3">
                    <img src="{{asset(auth()->user()->avtar)}}" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-3">
                            <div class="text-base font-semibold"> <a href="#"> Stella Johnson </a> </div>
                            <div class="font-medium text-sm text-gray-400"> 19 years old</div>
                        </div>
                        <div class="relative">
                            <input type="text" name="" id="" class="with-border" placeholder="Write her on Timeline">
                            <ion-icon name="happy" class="absolute right-3 text-2xl top-1/4"></ion-icon>
                        </div>
                    </div>
                </div>

            </div>
            <div class="relative cursor-pointer" uk-toggle="target: #upcoming; animation: uk-animation-fade">
                <div class="bg-gray-50 rounded-lg px-5 py-4 font-semibold text-base"> Upcoming birthdays </div>
                <i class="-translate-y-1/2 absolute icon-feather-chevron-up right-4 text-xl top-1/2 transform text-gray-400" id="upcoming" hidden></i>
                <i class="-translate-y-1/2 absolute icon-feather-chevron-down right-4 text-xl top-1/2 transform text-gray-400" id="upcoming"></i>
            </div>
            <div class="mt-5 sm:space-y-8 space-y-6" id="upcoming" hidden>

                <div class="flex items-center sm:space-x-6 space-x-3">
                    <img src="{{asset(auth()->user()->avtar)}}" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-3">
                            <div class="text-base font-semibold"> <a href="#">  Erica Jones </a> </div>
                            <div class="font-medium text-sm text-gray-400"> 19 years old</div>
                        </div>
                        <div class="relative">
                            <input type="text" name="" id="" class="with-border" placeholder="Write her on Timeline">
                            <ion-icon name="happy" class="absolute right-3 text-2xl top-1/4"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="flex items-center sm:space-x-6 space-x-3">
                    <img src="{{asset(auth()->user()->avtar)}}" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-3">
                            <div class="text-base font-semibold"> <a href="#"> Dennis Han </a> </div>
                            <div class="font-medium text-sm text-gray-400"> 19 years old</div>
                        </div>
                        <div class="relative">
                            <input type="text" name="" id="" class="with-border" placeholder="Write her on Timeline">
                            <ion-icon name="happy" class="absolute right-3 text-2xl top-1/4"></ion-icon>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@section('storyPreview')
<!-- story-preview -->
<div class="story-prev">

    <div class="story-sidebar uk-animation-slide-left-medium">
        <div class="md:flex justify-between items-center py-2 hidden">
            <h3 class="text-2xl font-semibold"> All Story </h3>
            <a href="#" class="text-blue-600"> Setting</a>
        </div>

        <div class="story-sidebar-scrollbar" data-simplebar>
            <h3 class="text-lg font-medium"> Your Story </h3>

            <a class="flex space-x-4 items-center hover:bg-gray-100 md:my-2 py-2 rounded-lg hover:text-gray-700" href="#">
                <svg class="w-12 h-12 p-3 bg-gray-200 rounded-full text-blue-500 ml-1" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <div class="flex-1">
                    <div class="text-lg font-semibold"> Create a story </div>
                    <div class="text-sm -mt-0.5"> Share a photo or write something. </div>
                </div>
            </a>

            <h3 class="text-lg font-medium lg:mt-3 mt-1"> Friends Story </h3>

            <div class="story-users-list"  uk-switcher="connect: #story_slider ; toggle: > * ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium ">
{{--All Stories Lists--}}
                <a href="#">
                    <div class="story-media">
                        <img src="{{asset(auth()->user()->avtar)}}" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Dennis Han</div>
                        <p> <span class="story-count"> 2 new </span> <span class="story-time"> 4Mn ago</span> </p>
                    </div>
                </a>
{{--All Stories List end--}}
            </div>


        </div>

    </div>
    <div class="story-content">

        <ul class="uk-switcher uk-animation-scale-up" id="story_slider" >
{{--          Story slider start--}}
            {{--
          <li class="relative">

                <span uk-switcher-item="previous" class="slider-icon is-left"> </span>
                <span uk-switcher-item="next" class="slider-icon is-right"> </span>

                <div uk-lightbox>
                    <a href="assets/images/avatars/avatar-lg-2.jpg" data-alt="Image">
                        <img src="assets/images/avatars/avatar-lg-2.jpg" class="story-slider-image"  data-alt="Image">
                    </a>
                </div>

            </li>
            <li class="relative">

                <span uk-switcher-item="previous" class="slider-icon is-left"> </span>
                <span uk-switcher-item="next" class="slider-icon is-right"> </span>

                <div uk-lightbox>
                    <a href="assets/images/avatars/avatar-lg-1.jpg" data-alt="Image">
                        <img src="assets/images/avatars/avatar-lg-1.jpg" class="story-slider-image"  data-alt="Image">
                    </a>
                </div>

            </li>
            <li class="relative">

                <span uk-switcher-item="previous" class="slider-icon is-left"> </span>
                <span uk-switcher-item="next" class="slider-icon is-right"> </span>

                <div uk-lightbox>
                    <a href="assets/images/avatars/avatar-lg-4.jpg" data-alt="Image">
                        <img src="assets/images/avatars/avatar-lg-4.jpg" class="story-slider-image"  data-alt="Image">
                    </a>
                </div>

            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            <li class="relative">
                <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
            </li>
            --}}
{{--            Story Slider End--}}
        </ul>

    </div>

    <!-- story colose button-->
    <span class="story-btn-close" uk-toggle="target: body ; cls: story-active"
        uk-tooltip="title:Close story ; pos: left">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </span>

</div>
@endsection

@section('createPostModal')
<!-- Craete post modal -->
<div id="create-post-modal" class="create-post is-story" uk-modal>
    <div
        class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">

        <div class="text-center py-3 border-b">
            <h3 class="text-lg font-semibold"> Create Post </h3>
            <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
        </div>
        <div class="flex flex-1 items-start space-x-4 p-5">
            <img src=""
                class="bg-gray-200 border border-white rounded-full w-11 h-11">
            <div class="flex-1 pt-2">
                <textarea class="uk-textare text-black shadow-none focus:shadow-none text-xl font-medium resize-none" rows="5"
                    placeholder="What's Your Mind ? Stella!"></textarea>
            </div>

        </div>
        <div class="bsolute bottom-0 p-4 space-x-4 w-full">
            <div class="flex bg-gray-50 border border-purple-100 rounded-2xl p-2 shadow-sm items-center">
                <div class="lg:block hidden ml-1"> Add to your post </div>
                <div class="flex flex-1 items-center lg:justify-end justify-center space-x-2">

                    <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <svg class="text-red-600 h-9 p-1.5 rounded-full bg-red-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"> </path></svg>
                    <svg class="text-green-600 h-9 p-1.5 rounded-full bg-green-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                    <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"> </path></svg>
                    <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"> </path></svg>
                    <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    <svg class="text-purple-600 h-9 p-1.5 rounded-full bg-purple-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path> </svg>

                    <!-- view more -->
                    <svg class="hover:bg-gray-200 h-9 p-1.5 rounded-full w-9 cursor-pointer" id="veiw-more" uk-toggle="target: #veiw-more; animation: uk-animation-fade" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"> </path></svg>

                </div>
            </div>
        </div>
        <div class="flex items-center w-full justify-between border-t p-3">

            <select class="selectpicker mt-2 story">
                <option>Only me</option>
                <option>Every one</option>
                <option>People I Follow </option>
                <option>People Follow Me</option>
            </select>

            <div class="flex space-x-2">
                <a href="#" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                    <svg class="h-5 pr-1 rounded-full text-red-500 w-6 fill-current" id="veiw-more" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="false" style=""> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    Live </a>
                <a href="#" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                  Share </a>
            </div>

            <a href="#" hidden
                class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                Share </a>
        </div>
    </div>
</div>
@endsection
