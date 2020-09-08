<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $categories = user::orderBy('id', 'desc')->get();
        return view('home');
    }
   
    public function create()
    {
        return view('Backend.pages.createuser');
    }
    public function storeuser(Request $request)
    {
        $users = new User();
        $users->name             = $request->name;
        $users->cname             =$request->cname;
        $users->contact        = $request->contact;
        $users->email        = $request->email;
        $users->password        =  Hash::make($request->password);
        $users->save();
    }
    

}
