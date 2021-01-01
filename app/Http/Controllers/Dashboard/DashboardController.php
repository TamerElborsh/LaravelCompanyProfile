<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showIndex()
    {
        return view('dashboard.index');
    }

    public function CreateUser()
    {
        return view('dashboard.users.create');
    }
}
