<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $model;
    
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    public function getIndex()
    {
        $users = $this->model
        ->orderBy('id', 'desc')
        ->paginate(config('common.paginate'));
        return view('admin.pages.user.index', compact('users'));
    }
}
