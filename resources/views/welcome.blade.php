<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
                background: url('/images/wallpaper01.png');
                justify-content: center;
                align-items: center;
            }
            a {
                color: white;
                font-weight: bold;
                padding: 10px;
                font-size: 20px;
            }
            h1 {
                color: white;
                font-size: 100px;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class='container'>
            <center><h1>Space Carrot Cart</h1></center>
            <center><img class="logobig" src="/images/logo.png" width="300" height="300"/></center>
            <center><div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/explore') }}" class="text-sm text-gray-700 underline">Explore</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div></center>
        </div>
    </body>
</html>
