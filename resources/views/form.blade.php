<form method="POST" action='/submit'>
@csrf
    <label>Name</label>
    <input type="text" name="username">
    <label>Age</label>
    <input type="number" name="age">
    <button type="submit">Submit</button>
</form>