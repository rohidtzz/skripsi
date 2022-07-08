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
        $url = 'https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022';
        $kalender = file_get_contents($url);
        $kalender = json_decode($kalender, true);
        $libur = false;
        $holiday = null;
        if ($kalender['data'] != false) {
            if ($kalender['data']['holiday']) {
                foreach ($kalender['data']['holiday'] as $key => $value) {
                    if ($value == date('Y/m/d')) {
                        $holiday = $value['holiday'];
                        $libur = true;
                        break;
                    }
                }
            }
        }

        $jammasuk= SettingJam::find(1)->jam_masuk;
        $jamkeluar= SettingJam::find(1)->jam_keluar;

        // dd($jammasuk);

        $dati=date_create($jamkeluar);
        date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        $jamkeluarkurang5 = date_format($dati,"H:i:s");


        return view('karyawan.absen', compact('jamkeluarkurang5','jammasuk','jamkeluar','libur','holiday'));

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function indexhrd()
    {
        // $status = Absen::whereUserId(auth()->user()->id)->whereTanggal(date('y/m/d'))->first();
        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();
        $url = 'https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022';
        $kalender = file_get_contents($url);
        $kalender = json_decode($kalender, true);
        $libur = false;
        $holiday = null;
        if ($kalender['data'] != false) {
            if ($kalender['data']['holiday']) {
                foreach ($kalender['data']['holiday'] as $key => $value) {
                    if ($value == date('Y/m/d')) {
                        $holiday = $value['holiday'];
                        $libur = true;
                        break;
                    }
                }
            }
        }

        $jammasuk= SettingJam::find(1)->jam_masuk;
        $jamkeluar= SettingJam::find(1)->jam_keluar;

        $dati=date_create($jamkeluar);
        date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        $jamkeluarkurang5 = date_format($dati,"H:i:s");

        return view('hrd.absen', compact('jamkeluarkurang5','jammasuk','jamkeluar','libur','holiday'));

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function indexdirektur()
    {
        // $status = Absen::whereUserId(auth()->user()->id)->whereTanggal(date('y/m/d'))->first();
        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();
        $url = 'https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022';
        $kalender = file_get_contents($url);
        $kalender = json_decode($kalender, true);
        $libur = false;
        $holiday = null;
        if ($kalender['data'] != false) {
            if ($kalender['data']['holiday']) {
                foreach ($kalender['data']['holiday'] as $key => $value) {
                    if ($value == date('Y/m/d')) {
                        $holiday = $value['holiday'];
                        $libur = true;
                        break;
                    }
                }
            }
        }

        $jammasuk= SettingJam::find(1)->jam_masuk;
        $jamkeluar= SettingJam::find(1)->jam_keluar;

        $dati=date_create($jamkeluar);
        date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        $jamkeluarkurang5 = date_format($dati,"H:i:s");

        return view('direktur.absen', compact('jamkeluarkurang5','jammasuk','jamkeluar','libur','holiday'));

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function checkIn(Request $request)
    {
        $id = auth()->user()->id;





        if (date('l') == 'Saturday' || date('l') == 'Sunday') {
            return redirect()->back()->with('error','Hari Libur Tidak bisa Check In');
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


        $wow = Absen::where('tanggal' , date('Y/m/d'))->where('user_id', $id);

        if($wow){
            return redirect()->back()->with('error','anda sudah cek in');
        }




        if(date('H:i:s') >= $jammasuklebih5 && date('H:i:s') <= $jammasuklebih10){
            Absen::create([
                'user_id' => $request->user_id,
                'keterangan' => 'Telat',
                'tanggal' => date('y/m/d'),
                'jam_masuk' => date('H:i:s'),
                'jam_keluar' => null,
            ]);

            return redirect()->back()->with('success','Check-in tapi anda telat');
        }

        if(date('H:i:s') >= $jammasuklebih10 && date('H:i:s') <= $jamkeluarkurang5){
            Absen::create([
                'user_id' => $request->user_id,
                'keterangan' => 'Alpha',
                'tanggal' => date('y/m/d'),
                'jam_masuk' => date('H:i:s'),
                'jam_keluar' => null,
            ]);

            return redirect()->back()->with('error','anda alpha');
        }

        if(date('H:i:s')  >=  $jammasuk && date('H:i:s') <= $jamkeluar ){
            Absen::create([
                'user_id' => $request->user_id,
                'keterangan' => $request->keterangan,
                'tanggal' => date('y/m/d'),
                'jam_masuk' => date('H:i:s'),
                'jam_keluar' => null,
            ]);

            return redirect()->back()->with('success','Check-in berhasil');
        }

    }

    public function checkOut(Request $request)
    {

        if (date('l') == 'Saturday' || date('l') == 'Sunday') {
            return redirect()->back()->with('error','Hari Libur Tidak bisa Check In');
        }

        $cek = Absen::where('tanggal', date('Y/m/d'));



        Absen::where('tanggal', date('Y/m/d'))->where('user_id',$request->user_id)
        ->update([
            'jam_keluar' => date('H:i:s'),
        ]);



        // $data['jam_keluar'] = date('H:i:s');
        // $kehadiran->update($data);
        return redirect()->back()->with('success', 'Check-out berhasil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // foreach ($users as $user) {
        //     $absen = Absen::whereUserId($user->id)->whereTanggal(date('Y-m-d'))->first();
        //     if (!$absen) {
        //         $alpha = true;
        //     }
        // }

        // if ($alpha) {
        //     foreach ($users as $user) {
        //         if ($user->id != $request->user_id) {
        //             Absen::create([
        //                 'keterangan'    => 'Alpha',
        //                 'tanggal'       => date('Y-m-d'),
        //                 'user_id'       => $user->id
        //             ]);
        //         }
        //     }
        // }

        // $present = Absen::whereUserId($request->user_id)->whereTanggal(date('Y-m-d'))->first();
        // if ($present) {
        //     if ($present->keterangan == 'Alpha') {
        //         $data['jam_masuk']  = date('H:i:s');
        //         $data['tanggal']    = date('Y-m-d');
        //         $data['user_id']    = $request->user_id;
        //         if (strtotime($data['jam_masuk']) >= strtotime('07:00:00') && strtotime($data['jam_masuk']) <= strtotime('08:00:00')) {
        //             $data['keterangan'] = 'Masuk';
        //         } else if (strtotime($data['jam_masuk']) > strtotime('08:00:00') && strtotime($data['jam_masuk']) <= strtotime('17:00:00')) {
        //             $data['keterangan'] = 'Telat';
        //         } else {
        //             $data['keterangan'] = 'Alpha';
        //         }
        //         $present->update($data);
        //         return redirect()->back()->with('success','Check-in berhasil');
        //     } else {
        //         return redirect()->back()->with('error','Check-in gagal');
        //     }
        // }

        // $data['jam_masuk']  = date('H:i:s');
        // $data['tanggal']    = date('Y-m-d');
        // $data['user_id']    = $request->user_id;
        // if (strtotime($data['jam_masuk']) >= strtotime('07:00:00') && strtotime($data['jam_masuk']) <= strtotime('08:00:00')) {
        //     $data['keterangan'] = 'Masuk';
        // } else if (strtotime($data['jam_masuk']) > strtotime('08:00:00') && strtotime($data['jam_masuk']) <= strtotime('17:00:00')) {
        //     $data['keterangan'] = 'Telat';
        // } else {
        //     $data['keterangan'] = 'Alpha';
        // }

        // Absen::create($data);

        // return dd($data);
        // return redirect()->back()->with('success','Check-in berhasil');
    }
}
