<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partial.link')
</head>
<body>
    @include('partial.header')
        @yield('contentSecond')
    @include('partial.footer')
    @include('partial.script')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>