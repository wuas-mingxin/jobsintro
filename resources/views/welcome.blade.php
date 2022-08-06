<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Intro   </title>

    <link rel="stylesheet" href="{{asset('talha/style.css')}}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/css/icons.css') }}">
    <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/css/style.css') }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('wuas-content/upload/plugins/loading/css/uprogress.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
    @livewireStyles
    @livewireStyles
</head>

<body>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap items-center mx-auto  py-0">
            <div class="flex items-center">
            <a href="https://jobsintro.com">
                <img src="{{ $general->website_logo }}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
            </a>
            @auth
            @else
                <a href="{{route('register')}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</a>
            @endauth
            </div>
            @auth
                <a href="{{route('user.home')}}" class="mt-3 px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Timeline</a>
            @else
                <form class="mt-sm-3 ml-auto" method="post" action="{{route('login')}}">
                    @csrf
                    <div class="container">
                        <div class="row items-center">
                            <div class="col-md-5 col-sm-12">
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Username" required="">
                            </div>

                            <div class="col-md-5 col-sm-12">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 py-2 mt-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg  text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign In</button>
                            </div>

                        </div>
                    </div>
                </form>
            @endauth
        </div>
    </nav>
<div class="container-fluid">
    <div class="row">

        <div class="offset-md-3 col-md-6 col-sm-12 ">
                @livewire(activeTemplate().'guest-post')
        </div>
        {{-- Right side cards --}}
        <div class="col-md-3 col-sm-12 mt-3 show">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">New On Jobsintro?</h5>
                    <p class="card-text">Sign up now to get your own personalized opnion timeline!</p>
                    <a href="{{route('register')}}" class="btn btn-primary text-white  btn-lg btn-block">Sign up</a>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Escrow System
                    </h5>
                    <p>
                        How you can sell your earnings on Jobsintro? If you want to sell your earnings via Escrow system
                        then
                        click on sell earning button. And if you want to purchase package then click on buy package
                        button.
                    </p>
                    <a href="#" class="btn btn-primary my-2 text-white btn-sm btn-block">Sell Earnings</a><br>
                    <a href="#" class="btn btn-primary text-white  btn-sm btn-block">Buy Package / Recharge</a>
                </div>
            </div>
        </div>
        {{-- Right side cards end --}}
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>

@livewireScripts
</body>
</html>
