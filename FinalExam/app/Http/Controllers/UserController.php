<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = User::where('username', $request->username)
            ->where('password', $request->password)
            ->get();

        if (count($data) > 0) {
            $request->session()->put('username', $request->username);

            if ($data[0]->type == "admin") {
                $request->session()->put('type', "admin");
                return redirect('admin');
            }

            $request->session()->put('type', "employee");
            return redirect('employee');
        } else {
            return redirect('login')->withErrors('Invalid Creditials');
        }


        return view('admin.index');
    }


    public function registerView()
    {
        return view('register');
    }
    public function register(UserRequest $request)
    {
        return view('admin.index');
    }
}