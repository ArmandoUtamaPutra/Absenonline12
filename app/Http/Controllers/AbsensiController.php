<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function absensi(Request $request)
    {
        DB::table('absensi')->insert([
            'id_absensi'=> $request->id_absensi,
            'id_peserta'=> $request->id_peserta,
            'nama'=> $request->nama,
            'jam_masuk'=> $request->jam_masuk,
            'jam_pulang'=> $request->jam_pulang,

            ]);
      return redirect()->back();
    }
}
