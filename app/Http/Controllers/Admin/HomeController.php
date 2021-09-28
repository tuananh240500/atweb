<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Dashboard index view
     *
     * @return void
     */
    public function getIndex()
    {
        return view('admin.pages.dashboard');
    }
}
