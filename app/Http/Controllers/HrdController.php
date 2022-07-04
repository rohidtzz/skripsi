<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Absen;

class HrdController extends Controller
{





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('hrd.hrd');
    }

    public function lihatabsen()
    {


        $id = auth()->user()->id;

        // $daftarabsen = Absen::all();

        // $daftarabsen =  Absen::with('nama')->paginate(4);

        // $daftarabsen =  Absen::with('nama')->paginate(4);

        $daftarabsen = Absen::all();


        // $nama = User::with('getam')->get()->where('id', 'asd');


        // dd($nama);


        $JumlahHadir = Absen::where('keterangan', 'masuk')->count();

        // $JumlahHadir = Absen::where('user_id',$id)->get('keterangan')->count();

        $JumlahAlpha = Absen::where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('keterangan', 'sakit')->count();

        $JumlahAbsen = Absen::all()->count();






        return view('hrd.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit'));


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
     * .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



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

        $data = Absen::where('id',$id)->get();

        if(!$data || $data == null){
            return redirect('/hrd/lihatabsen');
        }


        // return view('hrd/edit')->with(['data' => $data]);

        return view('hrd/edit', compact('data'));


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
        $idabsen = Absen::find($id);

        if(!$idabsen && $idabsen == null){

            return redirect('hrd/absen/lihatabsen');

        }

        Absen::where('id',$id)->update([
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar
        ]);

        return redirect('hrd/lihatabsen');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absen = Absen::find($id);

        if(!$absen && $absen || null){
            return redirect('/hrd/lihatabsen');
        }

        $cobadestroy = Absen::find($id)->delete();

        if($cobadestroy){
            return redirect('/hrd/lihatabsen');
        }

    }
}
