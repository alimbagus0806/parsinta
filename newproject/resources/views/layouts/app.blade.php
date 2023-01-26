<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title> {{ $title }} | Parsinta</title>
</head>

<body>
    @include('layouts.navbar')
    @yield('styles')
    <div class="container mt-3">
        @yield('konten')
    </div>
        @yield('blog')
    </div>
    @include('layouts.footer')