<!DOCTYPE html>
<html lang="en">
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
    @include('partials.seo')

</head>
<body>

    <div id="wrapper">

        @include($activeTemplate . 'partials.header')
        @include($activeTemplate . 'partials.sidebar')

        <!-- Main Contents -->
        @yield('content')

    </div>

    @yield('birthday')

    @include($activeTemplate . 'partials.open_chat_box')

    @yield('storyPreview')

    @yield('createPostModal')

    {{-- For Night mode --}}
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