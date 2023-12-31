<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @yield('header_styles')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/custom.js') }}"></script>
        <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
        @yield('header_scripts')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            <!-- Page Heading -->
            <header>
                <div class="max-w-3xl  bg-[#dddddd]  mx-auto pb-14 pt-16 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>

            @include('layouts.navigation')


            <!-- Page Content -->
            <main>
                @yield('body')
            </main>
        </div>
        @yield('footer_scripts')
    </body>
</html>
