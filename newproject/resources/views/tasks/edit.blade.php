@extends ('layouts.app', ['title' => 'tasks'])
@section ('title', 'tasks')
{{-- @section ('konten', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore repellat expedita iusto eligendi qui neque, placeat quasi ut quis sequi temporibus nulla quas eveniet ea consectetur suscipit dicta explicabo. Architecto.') --}}

@section('konten')
<form action="/tasks/{{ $task ->id }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="list" value= "{{ $task ->list }}" placeholder="The name of the task">

    <button class="btn btn-primary" type="submit">Update</button>
</form>


@endsection


