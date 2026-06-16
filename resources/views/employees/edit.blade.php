<h1>Edit Employee</h1>

<form action="/employees/{{ $employee->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $employee->name }}"><br>
    <input type="email" name="email" value="{{ $employee->email }}"><br>
    <input type="number" name="salary" value="{{ $employee->salary }}"><br>

    <button type="submit">Update</button>
</form>