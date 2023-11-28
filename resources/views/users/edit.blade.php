
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="regular" {{ $user->role === 'regular' ? 'selected' : '' }}>Regular User</option>
        </select>
        <button type="submit">Update User</button>
    </form>
@endsection
