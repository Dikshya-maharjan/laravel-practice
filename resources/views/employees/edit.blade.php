<h1>Edit Employee</h1>

<form action="/employees/{{ $employee->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $employee->name }}"><br>
    <input type="email" name="email" value="{{ $employee->email }}"><br>
 <select name="role_id">
        @foreach($roles as $role)
            <option value="{{ $role->id }}"
                {{ $employee->role_id == $role->id ? 'selected' : '' }}>
                {{ $role->name }}
            </option>
        @endforeach
    </select><br><br>
    <button type="submit">Update</button>
</form>