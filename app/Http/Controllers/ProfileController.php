<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(User $user){
        return view('profile.index', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        $username = $user->username;
        if(auth()->user()->username !== $username){
            return redirect("/profile/$username" );
        }
        return view('profile.edit', [
        'user' => $user,
        ]);
    }

    public function update(Request $request , User $user){

        $rules = [
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg'
        ];
        
        if($request->username !== $user->username){
            $rules = [
                'username' => 'required|unique:users,username',
            ];
        }

        $validatedData = $request->validate($rules);

        if($request->file('photo')){
            if($user->photo !== 'nopp.jpg'){
                Storage::delete($user->photo);
            }

            $validatedData['photo'] = $request->file('photo')->store('img-user');
        }

        User::where('id', $user->id)->update($validatedData);

        $username = User::firstWhere('id', $user->id)->username;

        return redirect("/profile/$username")->with('success', 'A Profile Has Been Updated Successful!');
    }
}