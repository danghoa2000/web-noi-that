<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=alegreya-sc:400|allison:400|beau-rivage:400|abril-fatface:400|afacad:400"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="layout_2" style="background-color: #012842; color: #fff;">
        @include('components.header')
        <div class="main-content" style="min-height: 500px">
            @yield('main-content')
        </div>
        @include('components.footer')
    </div>
</body>

</html>