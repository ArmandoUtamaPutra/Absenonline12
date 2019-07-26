<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function delete_users($id)
    {
    $db = DB::table('users')->where('id',$id);
    $db->delete();
       return redirect()->back();
    }
    public function login(Request $request)
    {
        $user = DB::table('users')->where('name_user',$request->email)->first();

            if($user){
                if ($user->password == $request->password) {
                    Session::put('id_admin',$user->id);
                    Session::put('Admin_login',TRUE);
                    return redirect()->route('index');
                }
            }else {
                return redirect()->back();
            }
    }
    public function logout()
    {
       Session::flush();
       return redirect('/');

    }
    public function Users()
    {
        $users = DB::table('users')->get();
        return view('users',compact('users'));
    }
    public function login_peserta(Request $request)
    {
        $peserta = DB::table('peserta')->where('nik',$request->nik)->first();
        if($peserta){
            Session::put('peserta_login',TRUE);
            return redirect()->route('index');

        }else {
            return redirect()->back();
        }
    }
}
