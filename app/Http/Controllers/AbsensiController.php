<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function absensi(Request $request)
    {
        DB::table('absensi')->insert([
            'id_peserta'=> $request->id_peserta,
            'name'=> $request->name,
            'jam_masuk'=> $request->jam_masuk,
            'date'=> $request->date,


        ]);
    }
    public function get_absensi()
    {
        $absensi = DB::table('absensi')->get();
        return view ('absensi', compact('absensi'));
    }
    
    public function Update_absensi(Request $request)

    {
        if(DB::table('absensi')->where('date', $request->date)){
            DB::table('absensi')->where('id_peserta', $request->id_peserta)->update([
                'jam_pulang'=> $request->jam_pulang

            //sekarang tinggal cari cara gmn supaya yg absen itu cuman bisa sehari doang absennya
            //klo udh ketemu ini aplikasinya udh selesai
            //tinggal nambahin fitur lain kayak fitur history dan sebgainya
            //cuman kalo fitur inti alias fitur absennya udh selesai ckckc

            ]);
        }

    }


}
