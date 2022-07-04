<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Absen;
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
    public function index()
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
        return view('karyawan.absen', compact('libur','holiday'));

        // $kalender = Http::get('https://kalenderindonesia.com/api/APIZ7UX2msi3c/libur/masehi/2022')->json();

        //  return dd($holiday);
    }

    public function checkIn(Request $request)
    {
        $id = auth()->user()->id;





        if (date('l') == 'Saturday' || date('l') == 'Sunday') {
            return redirect()->back()->with('error','Hari Libur Tidak bisa Check In');
        }

        $cek = Absen::where('tanggal', strtotime(date('y/m/d')));

        $ceki = User::find($id)->getabsen ;





        if($ceki){
             return redirect()->back()->with('error','anda sudah absen');

            // dd($cek);
        }

        if(date('H:i:s') >= '09:00:00' && date('H:i:s') <= '17:00:00' ){
            Absen::create([
                'user_id' => $request->user_id,
                'keterangan' => $request->keterangan,
                'tanggal' => date('y/m/d'),
                'jam_masuk' => date('H:i:s'),
                'jam_keluar' => null,
            ]);

            return redirect()->back()->with('success','Check-in berhasil');
        }

        if(date('H:i:s') >= '09:30:00' && date('H:i:s') <= '10:00:00'){
            Absen::create([
                'user_id' => $request->user_id,
                'keterangan' => 'Telat',
                'tanggal' => date('y/m/d'),
                'jam_masuk' => date('H:i:s'),
                'jam_keluar' => null,
            ]);

            return redirect()->back()->with('success','Check-in tapi anda telat');
        }

        if(date('H:i:s') >= '10:00:00' && date('H:i:s') <= '16:30:00'){
            Absen::create([
                'user_id' => $request->user_id,
                'keterangan' => 'Alpha',
                'tanggal' => date('y/m/d'),
                'jam_masuk' => date('H:i:s'),
                'jam_keluar' => null,
            ]);

            return redirect()->back()->with('error','anda alpha');
        }

    }

    public function checkOut(Request $request)
    {

        if (date('l') == 'Saturday' || date('l') == 'Sunday') {
            return redirect()->back()->with('error','Hari Libur Tidak bisa Check In');
        }

        Absen::find($request->user_id)
        ->update{[
            'jam_keluar' => date('H:i:s'),
        ]};



        // $data['jam_keluar'] = date('H:i:s');
        // $kehadiran->update($data);
        // return redirect()->back()->with('success', 'Check-out berhasil');
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
