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
                            <img src="assets/images/avatars/avatar-lg-1.jpg" alt="">
                            <div class="story-avatar"> <img src="assets/images/avatars/avatar-6.jpg" alt=""></div>
                            <div class="story-content"> <h4>Erica Jones </h4> </div>
                        </div>
                    </a>
                    <a href="#" uk-toggle="target: body ; cls: story-active">
                        <div class="single_story">
                            <img src="assets/images/avatars/avatar-lg-2.jpg" alt="">
                            <div class="story-avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                            <div class="story-content"> <h4>  Dennis Han</h4> </div>
                        </div>
                    </a>
                    <a href="#" uk-toggle="target: body ; cls: story-active">
                        <div class="single_story">
                            <img src="assets/images/avatars/avatar-lg-3.jpg" alt="">
                            <div class="story-avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt=""></div>
                            <div class="story-content"> <h4> Alex Mohani</h4> </div>
                        </div>
                    </a>
                    <a href="#" uk-toggle="target: body ; cls: story-active">
                        <div class="single_story">
                            <img src="assets/images/avatars/avatar-lg-4.jpg" alt="">
                            <div class="story-avatar"> <img src="assets/images/avatars/avatar-4.jpg" alt=""></div>
                            <div class="story-content"> <h4> Jonathan </h4> </div>
                        </div>
                    </a>
                    <a href="#" uk-toggle="target: body ; cls: story-active">
                        <div class="single_story">
                            <img src="assets/images/avatars/avatar-lg-5.jpg" alt="">
                            <div class="story-avatar"> <img src="assets/images/avatars/avatar-5.jpg" alt=""></div>
                            <div class="story-content"> <h4> Stella Johnson</h4> </div>
                        </div>
                    </a>

                    <span class="absolute bg-white lg:flex items-center justify-center p-2 rounded-full
                    shadow-md text-xl w-9 z-10 uk-position-center-right -mr-4 hidden" uk-toggle="target: body ; cls: story-active">
                    <i class="icon-feather-chevron-right"></i></span>

                </div>

                <!-- create post -->
                <div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
                    <div class="flex space-x-3">
                        <img src="assets/images/avatars/avatar-2.jpg" class="w-10 h-10 rounded-full">
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

                <div class="card lg:mx-0 uk-animation-slide-bottom-small">

                    <!-- post header-->
                    <div class="flex justify-between items-center lg:p-4 p-2.5">
                        <div class="flex flex-1 items-center space-x-4">
                            <a href="#">
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1 font-semibold capitalize">
                                <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                            </div>
                        </div>
                        <div>
                        <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                        <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                        uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">

                            <ul class="space-y-1">
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-edit-alt mr-1"></i>  Edit Post
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-comment-slash mr-1"></i>   Disable comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-favorite mr-1"></i>  Add favorites
                                    </a>
                                </li>
                                <li>
                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                    <i class="uil-trash-alt mr-1"></i>  Delete
                                    </a>
                                </li>
                            </ul>

                        </div>
                        </div>
                    </div>

                    <div uk-lightbox>
                        <a href="assets/images/avatars/avatar-lg-3.jpg">
                            <img src="assets/images/avatars/avatar-lg-4.jpg" alt="" class="max-h-96 w-full object-cover">
                        </a>
                    </div>


                    <div class="p-4 space-y-3">

                        <div class="flex space-x-4 lg:font-bold">
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </div>
                                <div> Like</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div> Comment</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                    </svg>
                                </div>
                                <div> Share</div>
                            </a>
                        </div>
                        <div class="flex items-center space-x-3 pt-2">
                            <div class="flex items-center">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            </div>
                            <div class="dark:text-gray-100">
                                Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                            </div>
                        </div>

                        <div class="border-t py-4 space-y-4 dark:border-gray-600">
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                class="uil-grin-tongue-wink"> </i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>

                        <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                            <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                            <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                <a href="#">
                                    <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="card lg:mx-0 uk-animation-slide-bottom-small">

                    <!-- post header-->
                    <div class="flex justify-between items-center lg:p-4 p-2.5">
                        <div class="flex flex-1 items-center space-x-4">
                            <a href="#">
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1 font-semibold capitalize">
                                <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                            </div>
                        </div>
                        <div>
                        <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                        <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                        uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">

                            <ul class="space-y-1">
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-edit-alt mr-1"></i>  Edit Post
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-comment-slash mr-1"></i>   Disable comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-favorite mr-1"></i>  Add favorites
                                    </a>
                                </li>
                                <li>
                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                    <i class="uil-trash-alt mr-1"></i>  Delete
                                    </a>
                                </li>
                            </ul>

                        </div>
                        </div>
                    </div>


                    <div uk-lightbox>
                        <div class="grid grid-cols-2 gap-2 px-5">

                            <a href="assets/images/post/img-4.jpg" class="col-span-2">
                                <img src="assets/images/post/img-4.jpg" alt="" class="rounded-md w-full lg:h-76 object-cover">
                            </a>
                            <a href="assets/images/post/img-4.jpg">
                                <img src="assets/images/post/img-2.jpg" alt="" class="rounded-md w-full h-full">
                            </a>
                            <a href="assets/images/post/img-4.jpg" class="relative">
                                <img src="assets/images/post/img-3.jpg" alt="" class="rounded-md w-full h-full">
                                <div class="absolute bg-gray-900 bg-opacity-30 flex justify-center items-center text-white rounded-md inset-0 text-2xl"> + 15 more </div>
                            </a>

                        </div>
                    </div>

                    <div class="p-4 space-y-3">

                        <div class="flex space-x-4 lg:font-bold">
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </div>
                                <div> Like</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div> Comment</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                    </svg>
                                </div>
                                <div> Share</div>
                            </a>
                        </div>
                        <div class="flex items-center space-x-3 pt-2">
                            <div class="flex items-center">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            </div>
                            <div class="dark:text-gray-100">
                                Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                            </div>
                        </div>

                        <div class="border-t py-4 space-y-4 dark:border-gray-600">
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                class="uil-grin-tongue-wink"> </i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>

                        <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                            <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                            <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                <a href="#">
                                    <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="card lg:mx-0 uk-animation-slide-bottom-small">

                    <!-- post header-->
                    <div class="flex justify-between items-center lg:p-4 p-2.5">
                        <div class="flex flex-1 items-center space-x-4">
                            <a href="#">
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1 font-semibold capitalize">
                                <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                            </div>
                        </div>
                        <div>
                        <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                        <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                        uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">

                            <ul class="space-y-1">
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-edit-alt mr-1"></i>  Edit Post
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-comment-slash mr-1"></i>   Disable comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-favorite mr-1"></i>  Add favorites
                                    </a>
                                </li>
                                <li>
                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                    <i class="uil-trash-alt mr-1"></i>  Delete
                                    </a>
                                </li>
                            </ul>

                        </div>
                        </div>
                    </div>


                    <div class="p-5 pt-0 border-b dark:border-gray-700">

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat

                    </div>


                    <div class="p-4 space-y-3">

                        <div class="flex space-x-4 lg:font-bold">
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </div>
                                <div> Like</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div> Comment</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                    </svg>
                                </div>
                                <div> Share</div>
                            </a>
                        </div>
                        <div class="flex items-center space-x-3 pt-2">
                            <div class="flex items-center">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            </div>
                            <div class="dark:text-gray-100">
                                Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                            </div>
                        </div>

                        <div class="border-t py-4 space-y-4 dark:border-gray-600">
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                class="uil-grin-tongue-wink"> </i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>

                        <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                            <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                            <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                <a href="#">
                                    <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="card lg:mx-0 uk-animation-slide-bottom-small">

                    <!-- post header-->
                    <div class="flex justify-between items-center lg:p-4 p-2.5">
                        <div class="flex flex-1 items-center space-x-4">
                            <a href="#">
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                            </a>
                            <div class="flex-1 font-semibold capitalize">
                                <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                            </div>
                        </div>
                        <div>
                        <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                        <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                        uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">

                            <ul class="space-y-1">
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-edit-alt mr-1"></i>  Edit Post
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-comment-slash mr-1"></i>   Disable comments
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                    <i class="uil-favorite mr-1"></i>  Add favorites
                                    </a>
                                </li>
                                <li>
                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                    <i class="uil-trash-alt mr-1"></i>  Delete
                                    </a>
                                </li>
                            </ul>

                        </div>
                        </div>
                    </div>

                    <div class="w-full h-full">
                        <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                            uk-video="automute: true" allowfullscreen uk-responsive class="w-full lg:h-64 h-40"></iframe>
                    </div>

                    <div class="p-4 space-y-3">

                        <div class="flex space-x-4 lg:font-bold">
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </div>
                                <div> Like</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div> Comment</div>
                            </a>
                            <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                    </svg>
                                </div>
                                <div> Share</div>
                            </a>
                        </div>
                        <div class="flex items-center space-x-3 pt-2">
                            <div class="flex items-center">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            </div>
                            <div class="dark:text-gray-100">
                                Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                            </div>
                        </div>

                        <div class="border-t py-4 space-y-4 dark:border-gray-600">
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                class="uil-grin-tongue-wink"> </i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                </div>
                                <div>
                                    <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                        <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                        <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                    </div>
                                    <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                        <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                        <a href="#"> Replay </a>
                                        <span> 3d </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>

                        <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                            <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                            <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                <a href="#">
                                    <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

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

                <div class="" uk-sticky="offset:80">

                    <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                        <ul uk-switcher="connect: #group-details; animation: uk-animation-fade">
                            <li class="uk-active"><a class="active" href="#0">  Friends  <span> 310 </span> </a></li>
                            <li><a href="#0">Groups</a></li>
                        </ul>
                    </nav>

                    <div class="contact-list">

                        <a href="#">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Dennis Han</div>
                        </a>
                        <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                            <div class="contact-list-box">
                                <div class="contact-avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
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

                        <a href="#">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username"> Erica Jones</div>
                        </a>
                        <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                            <div class="contact-list-box">
                                <div class="contact-avatar">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                    <span class="user_status"></span>
                                </div>
                                <div class="contact-username">  Erica Jones </div>
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
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username">Stella Johnson</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="">
                            </div>
                            <div class="contact-username"> Alex Dolgove</div>
                        </a>

                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Dennis Han</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username"> Erica Jones</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-7.jpg" alt="">
                            </div>
                            <div class="contact-username">Stella Johnson</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="">
                            </div>
                            <div class="contact-username"> Alex Dolgove</div>
                        </a>


                    </div>


                </div>

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
                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
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
                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
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
                    <img src="assets/images/avatars/avatar-6.jpg" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
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
                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="sm:w-16 sm:h-16 w-14 h-14 rounded-full">
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

                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Dennis Han</div>
                        <p> <span class="story-count"> 2 new </span> <span class="story-time"> 4Mn ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Adrian Mohani</div>
                        <p> <span class="story-count"> 1 new </span> <span class="story-time"> 1hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username">Alex Dolgove </div>
                        <p> <span class="story-count"> 3 new </span> <span class="story-time"> 2hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-4.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Stella Johnson </div>
                        <p> <span class="story-count"> 2 new </span> <span class="story-time"> 3hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Adrian Mohani </div>
                        <p> <span class="story-count"> 1 new </span> <span class="story-time"> 4hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-8.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Dennis Han</div>
                        <p> <span class="story-count"> 2 new </span> <span class="story-time"> 8Hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Adrian Mohani</div>
                        <p> <span class="story-count"> 1 new </span> <span class="story-time"> 12hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username">Alex Dolgove </div>
                        <p> <span class="story-count"> 3 new </span> <span class="story-time"> 22hr ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-8.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Stella Johnson </div>
                        <p> <span class="story-count"> 2 new </span> <span class="story-time"> 3Dy ago</span> </p>
                    </div>
                </a>
                <a href="#">
                    <div class="story-media">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                    </div>
                    <div class="story-text">
                        <div class="story-username"> Adrian Mohani </div>
                        <p> <span class="story-count"> 1 new </span> <span class="story-time"> 4Dy ago</span> </p>
                    </div>
                </a>


            </div>


        </div>

    </div>
    <div class="story-content">

        <ul class="uk-switcher uk-animation-scale-up" id="story_slider" >
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
            <img src="assets/images/avatars/avatar-2.jpg"
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