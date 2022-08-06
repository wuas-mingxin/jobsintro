<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->siteName($pageTitle ?? '') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('wuas-admin/images/login.jpg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/bootstrap-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/line-awesome.min.css') }}">

    @stack('style-lib')

    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/jquery-jvectormap-2.0.5.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/jquery-timepicky.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/bootstrap-clockpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/vendor/bootstrap-pincode-input.css') }}">
    <link rel="stylesheet" href="{{ asset('wuas-admin/css/app.css') }}">

    @livewireStyles
    @stack('style')
</head>
<body>
@yield('content')



<script src="{{ asset('global/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('global/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('wuas-admin/js/vendor/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('wuas-admin/js/vendor/jquery.slimscroll.min.js') }}"></script>


@include('partials.notify')
@stack('script-lib')

<script src="{{ asset('wuas-admin/js/nicEdit.js') }}"></script>
<script src="{{ asset('wuas-admin/js/vendor/prism.js') }}"></script>
<script src="{{ asset('wuas-admin/js/vendor/select2.min.js') }}"></script>
<script src="{{ asset('wuas-admin/js/app.js') }}"></script>
<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });
    })(jQuery);
</script>
@livewireScripts
@stack('script')


</body>
</html>
