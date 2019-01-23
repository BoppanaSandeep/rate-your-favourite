<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        return view("auth/login");
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $errors = new MessageBag;
        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = $request->password;
            $data = DB::table('users')->where('userEmail', $request->email)->select('*')->get();
            $data = json_decode(json_encode($data), true);
            if (count($data) > 0) {

                $dataAttempt = array('userEmail' => $email, 'password' => $password);

                if (Auth::attempt($dataAttempt, true)) {
                    return redirect('/');
                } else {
                    $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
                    return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
                }
            } else {
                $errors = new MessageBag(['password' => ['E-mail and/or password invalid.']]);
                return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
