<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <!-- <script src="/js/app.js"></script> -->

    <title>@yield('title')</title>
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>