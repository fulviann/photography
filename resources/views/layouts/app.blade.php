<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="icon" href="https://template.dsngrid.com/mexdot/dark/assets/img/logo-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://template.dsngrid.com/mexdot/dark/assets/img/logo-192x192.png" sizes="192x192" />

    <title> Portfolio </title>

    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="v-dark dsn-ajax">

    @include('layouts.preloader')
    
    @include('layouts.header')

    <main id="main_root" class="main-root">
        @yield('content')
    </main>

    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dsn-grid.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    @stack('scripts')
</body>
</html>