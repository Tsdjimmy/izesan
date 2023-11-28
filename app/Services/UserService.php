<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function createUser(array $userData)
    {
        return User::create($userData);
    }

    public function updateUser(User $user, array $userData)
    {
        $user->update($userData);
        return $user;
    }

    public function deleteUser(User $user)
    {
        return $user->delete();
    }
}
