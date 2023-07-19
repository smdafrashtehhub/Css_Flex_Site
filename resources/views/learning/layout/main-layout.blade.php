<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/fontawesome-free-6.2.1-web/css/all.css">
{{--    <link rel="stylesheet" href="./css/bootstrap/bootstrap.rtl.min.css">--}}
    <link rel="stylesheet" href="./css/learning.ir/main-layout.css">
    <link rel="stylesheet" href="./css/learning.ir/main.css">
    <link rel="stylesheet" href="@yield('css')">
    <title>Learning</title>
</head>

<body>

<div id="body-container">
    @include('learning/layout/header')
    @yield('main')
    @include('learning/layout/footer')
</div>

<script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
