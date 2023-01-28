@extends ('layouts.app', ['title' => 'Create New Task'])
@section('title', 'tasks')
{{-- @section('konten', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore repellat expedita iusto eligendi qui neque, placeat quasi ut quis sequi temporibus nulla quas eveniet ea consectetur suscipit dicta explicabo. Architecto.') --}}
@section('konten')
<h1>Create New Task</h1>
<form action="/tasks" method="post">
    
    @csrf
    <input type="text" name="list" placeholder="The name of the task">

    <button type="submit">Add</button>
</form>
@endsection



