<ul class= "navbar">
    
    {{-- <li><a href="/">home</a></li>
    <li><a href="/contact">contact</a></li>
    <li><a href="/posts/First-post">blog</a></li>
    <li><a href="/about">about</a></li>
    <li><a href="/profile">profile</a></li> --}}

@foreach ( $navbar   as  $name =>  $url )
<li><a href="{{ $url }}">{{ $name }}</a></li>
@endforeach
    
</ul>
