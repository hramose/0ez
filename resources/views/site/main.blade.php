<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('site.partials.seo-meta')
    @yield('meta')
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap-sandstorm.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ elixir('t/site/css/site.css') }}">
    @yield('css')
    @yield('js-top')
</head>
<body>
    @include('site.partials.header')
    @yield('body')
{{--    @include('site.partials.footer')--}}
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ elixir('t/site/js/site.js') }}"></script>
    @yield('js-bottom')
</body>
</html>