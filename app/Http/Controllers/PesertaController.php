<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function peserta(Request $request)
    {
        DB::table('peserta')->insert([
            'nik'=> $request->nik,
            'name'=> $request->nama,

            ]);
      return redirect()->back();
    }
    public function index()
    {
        $peserta = DB::table('peserta')->get();
        return view('peserta',compact('peserta'));
    }
    public function update_peserta(Type $var = null)
    {
        # code...
    }
}
