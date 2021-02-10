<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdatePasswordRequest;

class UsersController extends Controller
{
    public function editPassword()
    {
        $user = Auth::user();
        return view('users.edit_password', compact('user'));
    }

    public function updatePassword(UpdatePasswordRequest $request, $id)
    {
        $user = User::find($id);
        
        if (empty($user)) {
            Session::flash('error', "User Not Found");
            return redirect(route('users.index'));
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        Session::flash('message', "Password Updated");
        return redirect(route('home'));
    }
}
