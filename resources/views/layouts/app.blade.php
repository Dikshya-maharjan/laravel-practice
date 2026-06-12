<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- added css style using asset-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Header</h1>
    <ul>
        <li>Home</li>
        <li>About us</li>
        <li>Contact us</li>
</ul>
    @yield('content')
    <footer>
        Copyright 2026
</footer>
</body>
</html>