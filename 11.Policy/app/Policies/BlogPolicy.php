<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BlogPolicy
{

    public function view(User $user): bool
    {
        return $user->role === 'admin';
    }


    public function create(User $user): bool
    {
        // dd($user->role);
        return $user->role === 'admin';
    }


    public function update(User $user): bool
    {
        return $user->role === 'admin';
    }


    public function delete(User $user): bool
    {
        return $user->role === 'admin';
    }
}