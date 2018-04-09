<!doctype html>
<html lang={{ app()->getLocale() }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Hatch | @yield('title')</title>

    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
</head>
<body>

@include('layout._header');

<main class="container">
    @yield('content')
</main>

@include('layout._footer')

<script src = {{ asset("js/app.js") }}></script>
</body>
</html>