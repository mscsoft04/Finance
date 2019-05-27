<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
       /*  // Role::create(['name'=>'super']);
         auth()->user()->givePermissionTo('add_branch');
         auth()->user()->givePermissionTo('edit_branch');
         auth()->user()->givePermissionTo('view_branch');
         auth()->user()->givePermissionTo('add_roles');
         auth()->user()->getAllPermissions();
       return auth()->user()->permissions;  
      // $role = Role::create(['name' => 'admin']);
 */
      /* $permission = Permission::create(['name' => 'add_branch']);
      $permission = Permission::create(['name' => 'edit_branch']);
      $permission = Permission::create(['name' => 'view_branch']);
 */
auth()->user()->givePermissionTo('add_branch');
auth()->user()->givePermissionTo('edit_branch');
auth()->user()->givePermissionTo('view_branch');
        return view('home');
    }
}
