<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
USE App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Notification;
use App\Http\Requests\UpdateProfileRequest;
use App\Notifications\SendEmailNotification;
use App\Http\Requests\UpdateProfilePasswordRequest;
Use Image;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('nickname', 'email','phone_number'));
        $request->validate([
            'nickname' => ['required', 'string', 'max:10', 'alpha'],
            'phone_number' => ['required', 'max:10', 'min:9']]);

            auth()->user()->update([
                'name' => ($request->input('nickname')),
                'email' => ($request->input('email')),
                'phone_number' => ($request->input('phone_number'))
                
            ]);


        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/images/avatars/' . $filename));

            $user = auth()->user();
            $user->avatar = $filename;
            $user->save();
        }

        $user=auth()->user();

        $details=[

            'greeting' => 'Hi ' . $user->name,

            'body' => 'You changed some information on your profile, if it\'s not of your will please contact an administator.',

            'actiontext' => 'GO TO YOUR SETTINGS',

            'actionurl' => 'http://127.0.0.1:8000/dashboard',

            'lastline' => '',
        ];

        Notification::send($user, new SendEmailNotification($details));
        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }

    public function updatePassword(UpdateProfilePasswordRequest $request)
    {
        $hashedPassword = auth()->user()->password;

        if (Hash::check($request->old_password , $hashedPassword ))
            {
                
                $request->validate([
                    'password' => ['required','confirmed', Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()],
                ]);
                auth()->user()->update([
                    'password' => bcrypt($request->input('password')),  
                ]);
                ;
        }

        else
        {
            return redirect()->back()->withErrors(['msg' => 'Wrong old password']);

        }
        $user=auth()->user();

        $details=[

            'greeting' => 'Hi ' . $user->name,

            'body' => 'You changed your password, if it\'s not of your will please contact an administator.',

            'actiontext' => 'GO TO YOUR SETTINGS',

            'actionurl' => 'http://127.0.0.1:8000/dashboard',

            'lastline' => '',
        ];

        Notification::send($user, new SendEmailNotification($details));
        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }

    public function userDestroy() {

        $user = auth()->user();

       
        $user->delete();
        return redirect()->route('login')->with('status', 'Your account has been deleted!');

    }

    
}