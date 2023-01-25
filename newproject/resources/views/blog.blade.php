<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{asset('css/app.css')}}>
        <title>Blog</title>

        
       
    </head>
    <body>
        {{-- <ul class="navbar">
    
            <li><a href="/"></a>Home</li>
            <li><a href="/profile"></a>Profile</li>
            <li><a href="/contact"></a>Contact</li>
            <li><a href="/blog"></a>Blog</li>
            <li><a href="/about"></a>About</li>
        
        
        </ul> --}}
        @include('layouts.navbar')
        This is Blog Page. 
        <script src={{asset('js/app.js')}}></script> 
    </body>
</html>