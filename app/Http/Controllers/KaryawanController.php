<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Absen;
use App\Models\User;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    }

    public function dashboard()
    {

        return view('karyawan.karyawan');

    }

    public function Showabsen(){
        $id = auth()->user()->id;

        $daftarabsen = User::find($id)->getabsen;




        // $carimasuk = User::find($id )->getabsen;

        // $c = count($carimasuk);


        $daftarabse = Absen::where('keterangan','masuk')->get();

        $usere = User::find($id)->getabsen;

        $cek = Absen::where('keterangan','like',"%".'masuk'."%")->paginate();

        $c = $usere;






        // $carialpha = Absen::where('keterangan','alpha')->count();

        // $caritelat = Absen::where('keterangan','telat')->count();

        // $carisakit = Absen::where('keterangan','sakit')->count();


        // return dd($cari);

         return view('karyawan.showabsen',compact('daftarabsen','c'));

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
