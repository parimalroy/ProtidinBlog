<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller {

    public function index() {
        return view('admin.home.login');
    }

    public function adminLogin(Request $request) {
        $email_address = $request->email_address;
        $password = $request->password;
        $adminResult = DB::table('tbl_admin')
                ->select('*')
                ->where('email_address', $email_address)
                ->where('password', md5($password))
                ->first();
        if ($adminResult) {
            Session::put('admin_id', $adminResult->id);
            Session::put('admin_name', $adminResult->admin_name);
            return redirect('admin-dashboard');
        } else {
            return redirect('admin')->with('message', 'Email address or Password Invalid !');
        }
    }

}
