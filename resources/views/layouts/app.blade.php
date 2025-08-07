<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    @if (App::environment('production') || App::environment('staging'))
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Main Styles -->
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/styleswitch/styleswitch.css') }}" rel="stylesheet" type="text/css">

    <!-- Alternate Colors -->
    <link href="{{ asset('assets/css/colors/red-dark.css') }}" rel="stylesheet" title="red">
    <!-- <link href="{{ asset('assets/css/colors/red-2-dark.css') }}" rel="stylesheet" title="red-2">
    <link href="{{ asset('assets/css/colors/green-dark.css') }}" rel="stylesheet" title="green">
    <link href="{{ asset('assets/css/colors/green-2-dark.css') }}" rel="stylesheet" title="green-2">
    <link href="{{ asset('assets/css/colors/blue-dark.css') }}" rel="stylesheet" title="blue">
    <link href="{{ asset('assets/css/colors/blue-2-dark.css') }}" rel="stylesheet" title="blue-2">
    <link href="{{ asset('assets/css/colors/yellow-dark.css') }}" rel="stylesheet" title="yellow">
    <link href="{{ asset('assets/css/colors/yellow-2-dark.css') }}" rel="stylesheet" title="yellow-2">
    <link href="{{ asset('assets/css/colors/orange-dark.css') }}" rel="stylesheet" title="orange">
    <link href="{{ asset('assets/css/colors/gold-dark.css') }}" rel="stylesheet" title="gold">
    <link href="{{ asset('assets/css/colors/pink-dark.css') }}" rel="stylesheet" title="pink">
    <link href="{{ asset('assets/css/colors/purple-dark.css') }}" rel="stylesheet" title="purple">
    <link href="{{ asset('assets/css/colors/violet-dark.css') }}" rel="stylesheet" title="violet">
    <link href="{{ asset('assets/css/colors/turquoise-dark.css') }}" rel="stylesheet" title="turquoise">
    <link href="{{ asset('assets/css/colors/brick-dark.css') }}" rel="stylesheet" title="brick">
    <link href="{{ asset('assets/css/colors/silver-dark.css') }}" rel="stylesheet" title="silver"> -->

    <!-- Layout + Media -->
    <link href="{{ asset('assets/css/skeleton-wide.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/media.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons -->
    <!-- <link href="{{ asset('assets/css/font-awesome-4.3.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css"> -->
    <link href="{{ asset('assets/css/font-awesome-7.0.0/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Laravel Vite (optional) -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body class="font-sans antialiased">

    <!-- Optional Navigation -->

    <!-- Page Header -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Main Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/velocity.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.kenburnsy.min.js') }}"></script>
    <script>
        $(function () {
            "use strict";
            $("#kenburnsy-bg").kenburnsy({ fullscreen: true });
        });
    </script>
    <script src="{{ asset('assets/js/jquery.nicescroll.3.5.4.js') }}"></script>
    <script src="{{ asset('assets/js/sky.js') }}"></script>
    <script src="{{ asset('assets/js/form-subscribe.js') }}"></script>
    <script src="{{ asset('assets/js/form-contact.js') }}"></script>
    <script src="{{ asset('assets/knob/countdown.js') }}"></script>
    <script src="{{ asset('assets/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/knob/knob.js') }}"></script>
    <script src="{{ asset('assets/styleswitch/styleswitch.js') }}"></script>
    <script>
        $(document).ready(function () {
            "use strict";
            $(".corner").click(function () {
                $('#customizer').toggleClass('s-open');
            });
        });

        function swapStyleSheet(sheet) {
            document.getElementById('general-css').setAttribute('href', sheet);
        }
    </script>
    <script src="{{ asset('assets/js/analytics.js') }}"></script>
</body>

</html>