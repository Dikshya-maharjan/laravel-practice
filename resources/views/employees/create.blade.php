<form action="{{ route('employees.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="age" placeholder="Age"><br>
    <input type="email" name="email" placeholder="Email"><br>

    <select name="role_id">
        <option value="">Select Role</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}">
                {{ $role->name }}
            </option>
            <option value="{{$role->id}}">
                
        @endforeach
    </select>

    <button type="submit">Submit</button>
</form>