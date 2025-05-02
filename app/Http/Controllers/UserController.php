<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        return view('user.dashboard', compact('user'));
    }
}

