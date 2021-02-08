<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
            body{
                font-family: Poppins;
            }
            @livewireStyles
        </style>
    </head>
    <body>
        <div class="flex text-gray-800">
            <x-sidebar />
            <div class="w-3/4 ml-auto p-5 col-span-3">
                @yield('content')
            </div>
        </div>

        @livewireScripts
    </body>
</html>
