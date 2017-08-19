<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SupperAdminController extends Controller
{
    public function index(){
        return view('admin.home.dashboardContent');
    }
    
    public function adminLogout(){
       Session::put('admin_id','');
       Session::put('admin_name','');
        return redirect('admin')->with('message','Log out Sucessfully');
    }
}
