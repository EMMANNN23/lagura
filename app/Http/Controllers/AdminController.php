<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Show admin dashboard with list of users.
     */
    public function dashboard()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    /**
     * Show form to edit a user's role.
     */
    public function editUserRole(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Handle updating a user's role.
     */
    public function updateUserRole(Request $request, User $user)
    {
        $request->validate([
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'User role updated successfully.');
    }
}
