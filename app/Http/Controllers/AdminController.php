<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $adminCount = User::where('role', 'admin')->count();
        $regularUsers = User::where('role', 'user')->count();

        return view('admin.dashboard', compact('totalUsers', 'adminCount', 'regularUsers'));
    }

    public function users()
    {
        $users = User::orderByDesc('created_at')->paginate(20);
        return view('admin.users', compact('users'));
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,user',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return back()->with('success', 'User added successfully.');
    }

    public function resetPassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password reset successfully for ' . $user->name . '.');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === Auth::id()) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        return back()->with('success', 'User deleted successfully.');
    }
}
