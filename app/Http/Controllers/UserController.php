<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(5);
        $roles = Role::all();
        return view('user.index', compact('users', 'roles'));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'role_id' => ['required', 'exists:roles,id'],
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->role_id = $validatedData['role_id'];


        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        //
    }
}
