@extends('layouts.app')
<!-- means use app.blade.php as parent template  -->
@section('content')
<h2>Welcome Home</h2>
<b>This content is showed using ->yield('content')'</b>
<a href="/form">Click me</a>
@endsection