<?php

namespace Reta110\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{

    function edit(){

    	$id = auth()->user()->id;

		$user = User::find($id);

		return view('user-profile::edit', compact('user'));
    }

    function update(Request $request){

        $id = auth()->user()->id; 

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:6|confirmed',
        ]);

		$user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->update();

    	return redirect()->to('/home');    
    }
}
