<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Absen;

use App\Models\SettingJam;
use App\Models\DataUser;

use App\Models\Penyuratan;
use Illuminate\Http\Request;

class PenyuratanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $mulai = $request->mulai;
        // $selesai = $request->selesai;


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


        // if($mulai && $selesai){





        // $all = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get();



        // $JumlahAbsen = Absen::all()->count();

        // return view('hrd.penyuratan',compact('mulai','selesai','JumlahAbsen','all'));
        // }

        // $mulai = null;
        // $selesai = null;



        // $all = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();

        $all = Absen::whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();





        // if($jumlahalpha->count() >= 3){
        //     Penyuratan::create([
        //         'user_id' => $jumlahalpha->user_id,
        //         'tanggal' => Date('Y/m/d'),
        //         'alpha' => $jumlahalpha->count(),

        //     ]);
        // }

        // dd($all);



        $JumlahAbsen = Absen::all()->count();

        return view('hrd.penyuratan',compact('JumlahAbsen','all','jammasuklebih10','jamkeluarkurang5'));
    }

    public function penyuratanshow(Request $request,$id)
    {
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


        $all = Absen::where('user_id',$id)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();

        Penyuratan::create([
            'user_id' => $id,
            'tanggal' => Date('Y/m/d'),
            'alpha' => $all->count(),
        ]);

        return view('hrd.penyuratanshow',compact('all'));


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
     * @param  \App\Models\Penyuratan  $penyuratan
     * @return \Illuminate\Http\Response
     */
    public function show(Penyuratan $penyuratan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyuratan  $penyuratan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyuratan $penyuratan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyuratan  $penyuratan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyuratan $penyuratan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyuratan  $penyuratan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyuratan $penyuratan)
    {
        //
    }
}
