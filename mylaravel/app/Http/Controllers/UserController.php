<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view('user.index', ['user' => $users]);
    }

    function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }

    function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}