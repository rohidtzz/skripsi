<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Absen;
use App\Models\SettingJam;
use Illuminate\Support\Str;


use Carbon\Carbon;

use App\Models\User;
use Illuminate\Support\Facades\Http;



class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexkaryawan()
    {
        // $status = Absen::whereUserId(auth()->user()->id)->whereTanggal(date('y/m/d'))->first();
        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();
        // $url = 'https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022';
        // $kalender = file_get_contents($url);
        // $kalender = json_decode($kalender, true);
        // $libur = false;
        // $holiday = null;
        // if ($kalender['data'] != false) {
        //     if ($kalender['data']['holiday']) {
        //         foreach ($kalender['data']['holiday'] as $key => $value) {
        //             if ($value == date('Y/m/d')) {
        //                 $holiday = $value['holiday'];
        //                 $libur = true;
        //                 break;
        //             }
        //         }
        //     }
        // }

        // $jammasuk= SettingJam::find(1)->jam_masuk;
        // $jamkeluar= SettingJam::find(1)->jam_keluar;

        // // dd($jammasuk);

        // $dati=date_create($jamkeluar);
        // date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        // $jamkeluarkurang5 = date_format($dati,"H:i:s");
        // return view('karyawan.absen', compact('jamkeluarkurang5','jammasuk','jamkeluar','libur','holiday'));


        return view('karyawan.absen', );

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function indexhrd()
    {
        // $status = Absen::whereUserId(auth()->user()->id)->whereTanggal(date('y/m/d'))->first();
        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();
        // $url = 'https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022';
        // $kalender = file_get_contents($url);
        // $kalender = json_decode($kalender, true);
        // $libur = false;
        // $holiday = null;
        // if ($kalender['data'] != false) {
        //     if ($kalender['data']['holiday']) {
        //         foreach ($kalender['data']['holiday'] as $key => $value) {
        //             if ($value == date('Y/m/d')) {
        //                 $holiday = $value['holiday'];
        //                 $libur = true;
        //                 break;
        //             }
        //         }
        //     }
        // }

        // $jammasuk= SettingJam::find(1)->jam_masuk;
        // $jamkeluar= SettingJam::find(1)->jam_keluar;

        // $dati=date_create($jamkeluar);
        // date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        // $jamkeluarkurang5 = date_format($dati,"H:i:s");
        // return view('hrd.absen', compact('jamkeluarkurang5','jammasuk','jamkeluar','libur','holiday'));


        return view('hrd.absen');

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function indexdirektur()
    {
        // $status = Absen::whereUserId(auth()->user()->id)->whereTanggal(date('y/m/d'))->first();
        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();
        // $url = 'https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022';
        // $kalender = file_get_contents($url);
        // $kalender = json_decode($kalender, true);
        // $libur = false;
        // $holiday = null;
        // if ($kalender['data'] != false) {
        //     if ($kalender['data']['holiday']) {
        //         foreach ($kalender['data']['holiday'] as $key => $value) {
        //             if ($value == date('Y/m/d')) {
        //                 $holiday = $value['holiday'];
        //                 $libur = true;
        //                 break;
        //             }
        //         }
        //     }
        // }

        // $jammasuk= SettingJam::find(1)->jam_masuk;
        // $jamkeluar= SettingJam::find(1)->jam_keluar;

        // $dati=date_create($jamkeluar);
        // date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        // $jamkeluarkurang5 = date_format($dati,"H:i:s");
        // return view('direktur.absen', compact('jamkeluarkurang5','jammasuk','jamkeluar','libur','holiday'));

        return view('direktur.absen');

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function checkIn(Request $request)
    {
        $id = auth()->user()->id;





        if (date('l') == 'Saturday' || date('l') == 'Sunday') {
            return redirect()->back()->with('errors', 'hari libur tidak bisa Check In');
        }

        // $JamMasuk = SettingJam::where('id', 1)->get('jam_masuk');
        // $JamKeluar = SettingJam::where('id', 1)->get('jam_keluar');
        $jammasuk = SettingJam::find(1)->jam_masuk;
        $jamkeluar = SettingJam::find(1)->jam_keluar;

        $date=date_create($jammasuk);
        date_add($date,date_interval_create_from_date_string("+5 minutes"));
        $jammasuklebih5 = date_format($date,"H:i:s");

        $datu=date_create($jammasuk);
        date_add($datu,date_interval_create_from_date_string("+10 minutes"));
        $jammasuklebih10 = date_format($datu,"H:i:s");

        $dati=date_create($jamkeluar);
        date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        $jamkeluarkurang5 = date_format($dati,"H:i:s");

        // $datm=date_create($jamkeluar);
        // date_add($datm,date_interval_create_from_date_string("-10 minutes"));
        // $jamkeluarkurang10 = date_format($datm,"H:i:s");


        $wow = Absen::where('tanggal' , date('Y/m/d'))->where('user_id', $id)->first();

        if($wow != null){
            return redirect()->back()->with('errors', 'Anda Sudah Check In Hari Ini');
        }

        Absen::create([
            'user_id' => $request->user_id,
            'keterangan' => $request->keterangan,
            'tanggal' => date('y/m/d'),
            'jam_masuk' => date('H:i:s'),
            'jam_keluar' => null,
        ]);

        return redirect()->back()->withSuccess('Anda Berhasil Check In');


    }

    public function checkOut(Request $request)
    {

        $id = Auth()->user()->id;

        if (date('l') == 'Saturday' || date('l') == 'Sunday') {
            return redirect()->back()->with('errors','Hari Libur Tidak bisa Check In');
        }

        $keluar = null;

        $cek = Absen::where('tanggal', date('Y/m/d'))->where('user_id',$id)->first();

        if($cek == null){


            return redirect()->back()->with('errors', 'Silahkan check-in terlebih dahulu');
        }

        $ceki = Absen::where('tanggal', date('Y/m/d'))->where('user_id',$id)->where('jam_keluar', $keluar)->first();

            if($ceki == null){
                return redirect()->back()->with('errors', 'Anda Sudah Check-out Hari ini');
            }



        Absen::where('tanggal', date('Y/m/d'))->where('user_id',$request->user_id)
        ->update([
            'jam_keluar' => date('H:i:s'),
        ]);



        // $data['jam_keluar'] = date('H:i:s');
        // $kehadiran->update($data);
        return redirect()->back()->withSuccess('Check Out Berhasil');
    }


}
