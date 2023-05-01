<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('lib/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/styles.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

@guest

    <body class="app sedebar-mini rtl">

        <!-- Header -->
        <header>
            @include('layout.components.header')
        </header>

        <!-- Aside -->
        <aside>
            @include('layout.components.sidebar')
        </aside>

        <!-- Content -->
        <main>
            <div class="app-content" style="margin-left: 0px">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer>
            @include('layout.components.footer')
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('lib/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('lib/js/popper.min.js') }}"></script>
        <script src="{{ asset('lib/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/js/main.js') }}"></script>
        <script src="{{ asset('lib/js/plugins/pace.min.js') }}"></script>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        @yield('javascript')
    </body>
@else

    <body class="app sedebar-mini rtl">

        <!-- Header -->
        <header>
            @include('layout.components.header')
        </header>

        <!-- Aside -->
        <aside>
            @include('layout.components.sidebar')
        </aside>

        <!-- Content -->
        <main>
            <div class="app-content">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer>
            @include('layout.components.footer')
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('lib/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('lib/js/popper.min.js') }}"></script>
        <script src="{{ asset('lib/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/js/main.js') }}"></script>
        <script src="{{ asset('lib/js/plugins/pace.min.js') }}"></script>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        @yield('javascript')
    </body>
@endguest

</html>
