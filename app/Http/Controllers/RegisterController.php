<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    public function index()
    {
        return view("auth/register");
    }

    public function registerForm(Request $request)
    {
        $valid = $request->validate([
            'fname' => 'required|string|max:20',
            'lname' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users,userEmail',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($valid) {
            // echo 'true';
            $reg = array(
                'userfName' => $request->input('fname'),
                'userlName' => $request->input('lname'),
                'userEmail' => $request->input('email'),
                'userPwd' => Hash::make($request->input('password')),
                'userAdded' => date('Y-m-d H:i:s'),
                'userActive' => 1,
                'userStatus' => 1,
            );
            $response = DB::table('users')->insert($reg);

            if ($response) {
                return redirect()->action('UserController@index');
            }
        } else {
            return redirect()->action('RegisterController@index');
        }
    }
}
