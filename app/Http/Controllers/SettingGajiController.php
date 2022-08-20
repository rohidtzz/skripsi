<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SettingGaji;

class SettingGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all = SettingGaji::all();

        return view('hrd.gaji.settinggaji',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hrd.gaji.settinggajicreate');
    }

    public function settinggajipost(Request $request)
    {

        SettingGaji::create([
            'jenis_potongan' => $request->nama,
            'jumlah_potongan' => $request->jumlah
        ]);


        return redirect()->back()->withsuccess('data berhasil di tambahkan');
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
        if($id == null){
            return redirect()->back()->with('errors', 'Edit Gagal');
        }


        $all = SettingGaji::Find($id);

        if(!$all){
            return redirect()->back()->with('errors', 'Edit Gagal');
        }

        return view('hrd.gaji.settinggajiedit',compact('all'));
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

        if($id == null){
            return redirect()->back()->with('errors', 'Hapus Gagal');
        }


        $all = SettingGaji::where('id',$id)->update([
            'jenis_potongan' => $request->nama,
            'jumlah_potongan' => $request->jumlah
        ]);

        if(!$all){
            return redirect()->back()->with('errors', 'Edit Gagal');
        }

        return redirect()->back()->withsuccess('data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji = Settinggaji::find($id);

        if(!$gaji || $gaji == null){
            return redirect()->back()->with('errors', 'Hapus Gagal');
        }

        $cobadestroy = SettingGaji::find($id)->delete();

        if($cobadestroy){
            return redirect()->back()->withSuccess('Hapus Berhasil');
        }
        return redirect()->back()->with('errors', 'Hapus Gagal');

    }
}
