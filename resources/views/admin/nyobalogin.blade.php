<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Jalan Kuy</title>
        <style>
        body{
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/646ef81c13d928b5889b2011/releases/646ef9cd3b467f42f9c2d46e/img/20008474-6230278-3.png);
            background-position: 50% 50%;
            background-size: cover;
            height: 1117px;
            position: relative;
            width: 1728px;
        }
        form{
            position: absolute;
            width: 1016px;
            height: 722px;
            left: 356px;
            top: 200px;
            background: #FFFFFF;
            border-radius: 50px;
        }
        </style>


        {{-- <title>{{ config('app.name', 'JalanKuy') }}</title> --}}

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>






{{--
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="nyobalogin.css">
</head>
<body>
<div class="sign-up-1 screen">
    {{-- <img class="bg" src="https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf" alt="BG" />
    <div class="overlap-group-1">
        <div class="rectangle-1917">
        <div class="group-37847">
            <h1 class="title-1 valign-text-middle">Sign Up</h1>
            <div class="text-field-4 text-field">
                <div class="frame-243">
                    <div class="label-2 label lexend-normal-granite-gray-20px">Name</div>
                </div>
                <div class="text-field-3 text-field">
                    <div class="inputs-1 inputs">
                        <div class="x123456 lexend-normal-granite-gray-16px">Enter your full name</div>
                    </div>
                </div>
            </div>
            <div class="text-field-5 text-field">
                <div class="frame-243">
                    <div class="label-3 label lexend-normal-granite-gray-20px">Email</div>
                </div>
                <div class="text-field-3 text-field">
                    <div class="inputs-2 inputs">
                        <div class="x123456-3 lexend-normal-granite-gray-16px">Enter your email address</div>
                    </div>
                </div>
            </div>
            <div class="text-field-6 text-field">
                <div class="frame-243-2 frame-243">
                    <div class="label-4 label lexend-normal-granite-gray-20px">Password</div>
                    <div class="password-hide-see">
                        <img class="icon-1" src="icon-1.png" alt="icon" />
                        <div class="hide-1">Hide</div>
                    </div>
                </div>
                <div class="text-field-3 text-field">
                    <div class="inputs-3 inputs">
                        <div class="x123456-3 lexend-normal-granite-gray-16px">Enter your password</div>
                    </div>
                </div>
                <p class="error-message valign-text-middle">
                    Use 8 or more characters with a mix of letters, numbers & symbols
                </p>
            </div>
        <div class="link-text">
            <p class="by-creating-an-accou lexend-normal-granite-gray-16px-2"> <span class="lexend-normal-granite-gray-16px-2">By creating an account, you agree to our </span
                ><span class="span-1 lexend-normal-granite-gray-16px-2">Terms and Condition</span
                ><span class="lexend-normal-granite-gray-16px-2"> and </span
                ><span class="span-1 lexend-normal-granite-gray-16px-2">Privacy Policy.</span>
            </p>
        </div>
        <div class="button-1">
            <div class="frame-276">
                <div class="sign-up-2 valign-text-middle poppins-semi-bold-white-22px">Sign Up</div>
            </div>
        </div>
        <div class="have-an-account-login">
            <p class="already-have-an-ccount-log-in lexend-normal-granite-gray-16px-2">
                <span class="lexend-normal-granite-gray-16px-2">Already have an ccount? </span
                ><span class="span-1 lexend-normal-granite-gray-16px-2">Sign In</span>
            </p>
        </div>
    </div>
        <img class="vector-1" src="vector-13.png" alt="Vector" />
    </div>
</div>
</body>
</html> --}}
