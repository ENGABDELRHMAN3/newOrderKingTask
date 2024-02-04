<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Inertia\Inertia;
//user repositries Design Pattern


class AdminController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    function index() {
        $tenantUsers = $this->userRepository->getAllUsers();
        // dd($tenantUsers);
        return Inertia::render('Admin/Dashbord', [
            'users' => $tenantUsers
            ]);
        
    }
}
