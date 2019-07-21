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
            'name'=> $request->nama,
            'jam_masuk'=> $request->jam_masuk,
            'date'=> $request->date,

            ]);
    }
    public function Update_absensi(Request $request)

    {
        if(DB::table('absensi')->where('date', $request->date)){
            DB::table('absensi')->where('id_peserta', $request->id_absensi)->update([
                'jam_pulang'=> $request->jam_pulang
            ]);
        }
        
    }

   
}
