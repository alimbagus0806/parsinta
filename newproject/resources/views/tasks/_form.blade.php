<div class="justify-content-between">

    <a class="btn btn-primary md-2 d-grid" href="/tasks/{{ $task ->id }}/edit">edit</a>

        <form action="/tasks/{{ $task -> id }}" method="post">
        @csrf
        @method ('delete')
        <button class= "btn btn-danger" type="submit">delete</button>
        </form>

</div>