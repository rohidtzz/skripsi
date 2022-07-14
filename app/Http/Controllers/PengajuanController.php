<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengajuan;

class PengajuanController extends Controller
{


    public function pengajuan()
    {
        $all = Pengajuan::all();

        return view('karyawan.pengajuan', compact('all'));
    }

    public function pengajuanpost(Request $request)
    {

        // $validator = $request->validate([
        //     'tanggal' => 'required',
        //     'keterangan' => 'required',
        //     'tanggal' => 'required',
        //     'mulai' =>'required',
        //     'selesai' => 'required'
        // ]);

        // if(!$validator){

        //     return redirect('karyawan.pengajuan');
        // }

        $id = auth()->user()->id;

        $test = Pengajuan::create([
            'user_id' =>  $id,
            'keterangan' => $request->keterangan,
            'tanggal' => date('Y/m/d'),
            'mulai' => $request->mulai,
            'selesai' =>$request->selesai,
            'status' => 'pending'
        ]);

        if(!$test){

            return redirect('karyawan/pengajuan');
        }

        // dd($test);



        return redirect('karyawan/pengajuan');






        // return view('karyawan.cuti');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
