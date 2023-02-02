
        @extends ('layouts.app', ['title' => 'Beranda'])

        @section('konten')
        
        @section ('styles')
        <style>
            body {
                background-color: rgb(0, 130, 111);
            }
        </style>
        @endsection
        
            <h1>All Users</h1>
            <div class="container">

           

                @foreach ($users as $user)
                {{-- <li><a href="/users/{{$user -> username}}">{{$user -> name}}</a></li> --}}
                <li><a href="{{route('users.show', $user->username)}}">{{$user -> name}}</a></li>
                @endforeach
    
            </div>
        @endsection 






