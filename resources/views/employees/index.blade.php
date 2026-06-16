<h1>Employee List</h1>

<a href="{{ route('employees.create') }}">Add Employee</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->email }}</td>

                <td>
                    <a href="/employees/{{ $employee->id }}/edit">Edit</a>

                    <form action="/employees/{{ $employee->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
