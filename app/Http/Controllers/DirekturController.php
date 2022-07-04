<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Absen;

class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('direktur.direktur');
    }

    public function lihatabsen()
    {


        $id = auth()->user()->id;

        // $daftarabsen = Absen::all();

        $daftarabsen =  Absen::all();


        // $nama = User::find(1)->getabsen;

        $JumlahHadir = Absen::all()->count('keterangan', 'masuk');

        // $JumlahHadir = Absen::where('user_id',$id)->get('keterangan')->count();

        $JumlahAlpha = User::find($id)->getabsen()->where('keterangan', 'alpha')->count();

        $JumlahTelat = User::find($id)->getabsen()->where('keterangan', 'telat')->count();

        $JumlahSakit = User::find($id)->getabsen()->where('keterangan', 'sakit')->count();






        return view('direktur.showabsen',compact('daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit'));

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
        //
    }
}
