@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Add User</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <label for="role">Role:</label>
    <select name="role" id="role" required>
        <option value="admin">Admin</option>
        <option value="regular">Regular User</option>
    </select>
    <button type="submit">Add User</button>
</form>
@endsection
