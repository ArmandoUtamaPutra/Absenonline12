<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function delete_absensi($id)
    {
       $db = DB::table('absensi')->where('id_absensi',$id);
       $db->delete();
       return redirect()->back();
    }
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
            ]);
        }
    }
}
