@include('layouts.header')
<body>
    @include('layouts.navbar')
    @yield('styles')
    <div class="container mt-3">
        @yield('konten')
    </div>
        @yield('blog')
    </div>
    @include('layouts.footer')