<?php

namespace App\Http\Controllers\loginRegister;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\User;
use App\Role;
use Hash;

class RegisterController extends Controller
{
    public function register()
    {
        $roles = Role::all();
        return view('loginRegister.register', compact('roles'));
    }

    public function storeUser(StoreUserRequest $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);

        return redirect('login');
    }

}
