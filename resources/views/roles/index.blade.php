<h1>Role List</h1>

<a href="{{ route('roles.create') }}">Add Role</a>

<br><br>

@foreach($roles as $role)
    <p>
        {{ $role->name }}

        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach