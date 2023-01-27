@extends ('layouts.app', ['title' => 'tasks'])
@section ('title', 'tasks')
{{-- @section ('konten', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore repellat expedita iusto eligendi qui neque, placeat quasi ut quis sequi temporibus nulla quas eveniet ea consectetur suscipit dicta explicabo. Architecto.') --}}

@section('konten')
<form action="/tasks" method="post">
    
    @csrf
    <input type="text" name="list" placeholder="The name of the task">

    <button type="submit">Add</button>
</form>



    <ol style= "list-style-type: none">
        <div style="margin-bottom : 10px"><a href="tasks/create">Create New Task</a></div>
        @foreach ($tasks as $index =>  $task)
            <li>{{ $index + 1 }} - {{ $task->list }} - <a href="/tasks/{{ $task ->id }}/edit">edit</a></li>
        @endforeach

    </ol>


   

 


@endsection


