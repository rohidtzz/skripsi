<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SettingJam;

class SettingController extends Controller
{

    public function jamkerja(Request $request)
    {

        $data = SettingJam::all();

        return View('setting.index', compact('data'));

    }

    // public function jamkerjadirektur(Request $request)
    // {

    //     $data = SettingJam::all();

    //     return View('setting.index', compact('data'));

    // }

    public function jamkerjaupdate(Request $request)
    {

        $validasi = $request->validate([
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
        ]);

        if(!$validasi){
            return redirect()->back()->with('errors', 'gagal Update Jam Kerja');
        }

        SettingJam::find(1)->update([
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar
        ]);

        return redirect('hrd/settings/jamkerja')->withSuccess('Berhasil Update Jam Kerja');


    }




}
