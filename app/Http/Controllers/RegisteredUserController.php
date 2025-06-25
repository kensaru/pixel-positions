<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return View::make('auth.register');
    }


    public function store(Request $request)
    {
        //after making the form hit a post request method, fake fill the form and click the button to dump the request data
        // dump($request->all());

        // copy the dumped data in the valdate rules, add the commas and save for format ... remove what i dont need then add the validation rules
        // https://laravel.com/docs/12.x/validation#available-validation-rules

        $userAttributes = $request->validate([
            'first' => ['required'],
            'last' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        // save validated data to the database

        $userAttributes['password'] = Hash::make($userAttributes['password']);
        $user = User::create($userAttributes);
        Auth::login($user);

        // filesystem disk to public ... now lives in storage/app/public/logos
        $logoPath = $request->logo->store('logos');

        //remember an employer belongs to a user
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);


return redirect('/')->with('success','User has been created successfully.');

        // return redirect()->route('')->with('success','User has been created successfully.');
        //  return to_route('jobs');
    }
}
