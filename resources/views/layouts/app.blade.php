<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,viewport-fit=cover,initial-scale=1" />

    <title>{{ config('app.name', 'Laravel') }}@yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/assets/favicon/site.webmanifest" />
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#1799c6" />
    <meta name="msapplication-TileColor" content="#ffc40d" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link href="/assets/styles/main.css?ver=2020052001" rel="stylesheet">

    @yield('pageCSS')
</head>

<body>
    <div id="app">
        <main role="main" id="mainContainer" class="main">
            @yield('content')
        </main>
    </div>

    {{-- @include('layouts._navfooter') --}}

    {{-- @include('layouts._footer') --}}

    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @yield('pageJS')
</body>

</html>
