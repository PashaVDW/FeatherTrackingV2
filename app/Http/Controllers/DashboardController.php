<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::User();

        return view('pages.dashboard.dashboard', compact('user'));
    }
}
