
<!DOCTYPE html>
<html lang="en" class="bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset($activeTemplateTrue . 'assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>{{ $general->sitename("Register") }}</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        input , .bootstrap-select.btn-group button{
            background-color: #f3f4f6  !important;
            height: 44px  !important;
            box-shadow: none  !important;
        }
        .error{
            color: red;
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
                <!-- Container -->
                <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
                    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-2/4 lg:w-2/4 sm:w-1/3 rounded-lg">
                        <h3 class="text-2xl font-bold text-center">Join us</h3>
                        <form action="{{route('register')}}" method="post" id="register-form">
                            @csrf
                            <div class="mt-4">
                                
                                <div class="w-full flex my-2">
                                    <div class="md:w-2/4 mx-1">
                                        <label for="firstname" class="mb-0"> @lang('Firstname') </label>
                                        <input id='firstname' type="text" name="firstname" value="{{old('firstname')}}" placeholder="Firstname" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    </div>
                                    <div class="md:w-2/4">
                                        <label class="mb-0"> @lang('Lastname') </label>
                                        <input id='lastname'  type="text" name="lastname" value="{{old('lastname')}}" placeholder="Lastname" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    </div>
                                </div>

                                
                                <div class="w-full flex my-2">
                                    <div class="md:w-2/4 mx-1">
                                        <label class="mb-0"> @lang('Username') </label>
                                        <input id='username' type="text" name="username" value="{{old('username')}}" placeholder="Username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                        @error('username')<label id="username-error" class="error" for="username">{{$message}}</label>@enderror
                                    </div>
                                    <div class="md:w-2/4">
                                        <label class="mb-0"> @lang('Email') </label>
                                        <input id='email' type="email" name="email" value="{{old('email')}}" placeholder="Email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                        @error('email')<label id="email-error" class="error" for="email">{{$message}}</label>@enderror
                                    </div>
                                </div>

                                <div class="w-full flex my-2">
                                    <div class="md:w-2/4 mx-1">
                                        <label class="mb-0"> @lang('Phone') </label>
                                        <input id='phone' type="text" id="phone" name="phone" value="{{old('phone')}}" placeholder="Phone" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                        @error('phone')<label id="phone-error" class="error" for="phone">{{$message}}</label>@enderror
                                    </div>
                                    <div class="md:w-2/4">
                                        <label class="mb-0"> @lang('Gender') </label>
                                        <div class="flex">
                                            <div class="flex items-center mr-4">
                                                <input id="inline-radio" type="radio" value="1" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                                            </div>
                                            <div class="flex items-center mr-4">
                                                <input id="inline-2-radio" type="radio" value="2" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                            </div>
                                            <div class="flex items-center mr-4">
                                                <input id="inline-checked-radio" type="radio" value="3" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="inline-checked-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full flex my-2">
                                    <div class="md:w-2/4 mx-1">
                                        <label class="mb-0"> @lang('Password') </label>
                                        <input id='password' type="password" name="password" placeholder="***********" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    </div>
                                    <div class="md:w-2/4">
                                        <label class="mb-0"> @lang('Confirm Password') </label>
                                        <input id='password_confirmation' type="password" name="password_confirmation" placeholder="***********" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    </div>
                                </div>

                                @error('email')<span class="text-xs text-red-400">{{$message}}</span>@enderror
                                <div class="flex">
                                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                                        Account</button>
                                </div>
                                <div class="mt-6 text-grey-dark">
                                    Already have an account?
                                    <a class="text-blue-600 hover:underline" href="#">
                                        Log in
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js" integrity="sha512-Po9nSdYOcWIcoADdRjkAbRYPpR8OHjxzA/3RDUERZcDewTLzRTxbG4bUX7Sr7lVEcO3wTCzphdOBWgNFKVmxaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>

    <script>
     
      </script>
    <script>
        var nameReg = /^[A-Za-z]+$/;
        var numberReg =  /^[0-9]+$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();
        var message = $('#messageInput').val();
        $(document).ready(function () {
        $('#register-form').validate({ // initialize the plugin
            rules: {
                firstname: {
                    required: true,
                },
                lastname: {
                    required: true,
                },
                username: {
                    required: true,
                },
                password:{
                    minlength : 8,
                    required:true,
                },
                password_confirmation: {
                    equalTo : "#password"
                },
                phone:{
                    required:true,
                    minlength:11
                },
                email:{
                    required:true,
                    email:true
                },
                errorElement : 'div',
                errorLabelContainer: '.bg-red'
            }
        });
        });
    </script>

</body>
</html>
