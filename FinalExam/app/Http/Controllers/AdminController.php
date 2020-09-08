<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;


class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.index')->with('users', $users);
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(UserRequest $request)
    {

        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->company = $request->company;
        $user->contact = $request->contact;
        $user->type = 'employee';

        $user->save();

        return redirect('admin');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit')->with('user', $user);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'company' => 'required',
            'contact' => 'required'
        ]);

        $user = User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->company = $request->company;
        $user->contact = $request->contact;
        $user->save();
        return redirect('admin');
    }
    public function delete($id)
    {
        $user = User::find($id);
        return view('admin.delete')->with('user', $user);
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin');
    }
}