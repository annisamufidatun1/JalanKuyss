<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Jalan Kuy</title>
        <style>
        body{
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/646ef81c13d928b5889b2011/releases/646ef9cd3b467f42f9c2d46e/img/20008474-6230278-3.png);
            background-position: 50% 50%;
            background-size: cover;
            position: relative;
            width: 1728px;
            height: 1117px;

        }
        .backgroudform{
            position: absolute;
            width: 1016px;
            height: 722px;
            left: 356px;
            top: 200px;

            background: #FFFFFF;
            border-radius: 50px;
        }
        </style>
    <body>
        <div class="backgroudform">
            {{ $slot }}
        </div>
        <!-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{-- {{ $slot }} --}}
            </div>
        </div> -->
         <!-- {{-- <title>{{ config('app.name', 'JalanKuy') }}</title> --}}

        <!-- Fonts -->
        <!-- {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} -->
    </head>
    </body>
</html>





