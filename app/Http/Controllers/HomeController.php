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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$roleSuperAdmin = Role::create(['name' => 'super_admin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleModerator = Role::create(['name' => 'moderator']);
        $roleResseller = Role::create(['name' => 'resseller']);
        $roleSubscribe = Role::create(['name' => 'subscribe']);
        $permission = Permission::create(['name' => 'edit articles']);
        $permission = Permission::create(['name' => 'post articles']);
        $permission = Permission::create(['name' => 'delete articles']);*/
        return view('home');
    }
}
