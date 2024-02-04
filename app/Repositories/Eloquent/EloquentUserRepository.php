<?php
namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function getAllUsers()
    {
        return User::where('id','!=', auth()->user()->id)->get();
    }
}
