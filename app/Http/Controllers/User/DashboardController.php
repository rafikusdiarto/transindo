<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['role:customer']);
    }

    public function index()
    {
        return view('user.layouts.app');
    }
}
