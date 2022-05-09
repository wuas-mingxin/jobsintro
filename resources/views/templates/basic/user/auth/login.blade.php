
<!DOCTYPE html>
<html lang="en" class="bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset($activeTemplateTrue . 'assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>{{ $general->sitename($page_title) }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/css/icons.css') }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        input , .bootstrap-select.btn-group button{
            background-color: #f3f4f6  !important;
            height: 44px  !important;
            box-shadow: none  !important;
        }
    </style>
</head>
<body>

    <body class="bg-gray-100">


        <div id="wrapper" class="flex flex-col justify-between h-screen">

            <!-- header-->
            <div class="bg-white py-4 shadow dark:bg-gray-800">
                <div class="max-w-6xl mx-auto">


                    <div class="flex items-center lg:justify-between justify-around">

                        <a href="{{ url('/') }}">
                            <img src="{{ asset($general->website_logo) }}" alt="{{ $general->website_name }}" class="w-32">
                        </a>

                        <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                            <a href="{{ route('login') }}" class="py-3 px-4"> @lang('Login')</a>
                            <a href="{{ route('register') }}" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white"> @lang('Register')</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Content-->
            <div>
                <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">

                    <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>

                        <div>
                            <label class="mb-0"> @lang('Username') </label>
                            <input type="text" name="username" placeholder="Username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        </div>

                        {{-- <div>
                            <label class="mb-0"> @lang('Email Address') </label>
                            <input type="email" name="email" placeholder="Info@example.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        </div> --}}

                        <div>
                            <label class="mb-0"> @lang('Password') </label>
                            <input type="password" name="password" placeholder="******" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                @lang('Login')</button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Footer -->

            <div class="lg:mb-5 py-3 uk-link-reset">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <div class="flex space-x-2 text-gray-700 uppercase">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                    <p class="capitalize"> {{ $general->copyright }}</p>
                </div>
            </div>

        </div>



    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);

        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>

@include('partials.notify')

    <!-- Javascript
    ================================================== -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/js/tippy.all.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/js/uikit.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/js/simplebar.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/js/custom.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/js/bootstrap-select.min.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>
