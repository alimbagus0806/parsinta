
        @extends ('layouts.app', ['title' => 'Beranda'])

        @section('konten')
        
        @section ('styles')
        <style>
            body {
                background-color: rgb(0, 130, 111);
            }
        </style>
        @endsection
        
            <h1>{{ $user -> name }}
                <small class="text-secondary">{{ $user -> username }}</small>
            </h1>

        
            
        @endsection 