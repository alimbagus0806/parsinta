@extends ('layouts.app', ['title' => 'tasks'])
@section ('title', 'tasks')
{{-- @section ('konten', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore repellat expedita iusto eligendi qui neque, placeat quasi ut quis sequi temporibus nulla quas eveniet ea consectetur suscipit dicta explicabo. Architecto.') --}}

@section('konten')

<div class="container">
<div class="row">

    <div class="col-md-6">

@include ('tasks._create')

</div>

    <ol class="list-group">
        <div style="margin-bottom : 10px"><a href="tasks/create">Create New Task</a></div>
        @foreach ($tasks as $index =>  $task)
            <li class="list-group-item d-flex align-items-center justfy-content-between">
                
                {{ $index + 1 }} - {{ $task->list }} 
                
                <div class="d-flex justify-content-between ms-auto ml-2">

                    <a class="btn btn-primary me-2 d-grid" href="/tasks/{{ $task ->id }}/edit">edit</a>
                
                        <form action="/tasks/{{ $task -> id }}" method="post">
                        @csrf
                        @method ('delete')
                        <button class= "btn btn-danger ms-auto" type="submit">delete</button>
                        </form>
                
                </div>
            
            </li>
        @endforeach

    </ol>
</div>

   

 


@endsection


