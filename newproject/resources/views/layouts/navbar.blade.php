{{-- <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <li><a href="/">Home</a></li>
    <li><a href="/profile">Profile</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/tasks">Tasks</a></li>
</div> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
      <a class="navbar-brand" href="#">NewProject</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            @foreach ($navbar as $name -> $url)
                <li class="nav-item">
                    <a href="{{ $url }}" class="nav-link">{{ $name }}</a>
                </li>

                @endforeach



        </ul>
        
      </div>
    </div>
  </nav>