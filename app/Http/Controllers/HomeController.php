<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

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
         //Role::create(['name'=>'super']);
        /*  auth()->user()->givePermissionTo('add_users');
         auth()->user()->givePermissionTo('edit_users');
         auth()->user()->givePermissionTo('view_users');
         auth()->user()->givePermissionTo('add_users');
         auth()->user()->getAllPermissions();
       return auth()->user()->permissions; */
        return view('home');
    }
}
