<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cheetahtec</title>
</head>
    @include('layouts.css')
<body class="home">
<div class="main_wrap">
    @include('layouts.header')
    
    @yield('content')
    
    @include('layouts.footer') 
</div>
    @include('layouts.js')
</body>
</html>