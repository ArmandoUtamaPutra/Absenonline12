<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        $user = DB::table('users')->where('name_user',$request->email)->first();
            if($user){
                if ($user->password == $request->password) {
                    Session::put('id_admin',$user->id);
                    Session::put('Admin_login',TRUE);
                    return redirect('/admin');
                }
            }else {
                return redirect()->back();
            }
    }
    public function logout()
    {
       Session::flush();
       return redirect('/login');

    }
}
