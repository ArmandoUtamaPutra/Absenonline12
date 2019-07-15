<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function peserta(Request $request)
    {
        DB::table('peserta')->insert([
            'id_peserta'=> $request->id_peserta,
            'nik'=> $request->nik,
            'name'=> $request->nama,
            'password'=> $request->password,

            ]);
      return redirect()->back();
    }
}
