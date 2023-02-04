@extends ('layouts.app', ['title' => 'tasks'])
@section ('title', 'tasks')
{{-- @section ('konten', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore repellat expedita iusto eligendi qui neque, placeat quasi ut quis sequi temporibus nulla quas eveniet ea consectetur suscipit dicta explicabo. Architecto.') --}}

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="/tasks/{{ $task ->id }}" method="post">
                            @method('put')
                            @csrf
                        @include ('tasks._form', [
                                'submit'=> 'Update'
                        ])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection


