<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{


    public function tambahpdf(Request $request)
    {
        if($request == null){
            return redirect()->back()->with('errors', 'Import Gagal');
        }

        $this->validate($request, [
            'cv'          => 'required',
            'ijazah'    => 'required',
            'sertifikat'          => 'required',
            'ktp'    => 'required',
            'npwp'          => 'required',
        ]);

        $cv = $request->file('cv');
        $ijazah = $request->file('ijazah');
        $sertifikat = $request->file('sertifikat');
        $ktp = $request->file('ktp');
        $npwp = $request->file('npwp');

        $nama_file_cv = $cv->getClientOriginalName();
        $nama_file_ijazah = $ijazah->getClientOriginalName();
        $nama_file_sertifikat = $sertifikat->getClientOriginalName();
        $nama_file_ktp = $sertifikat->getClientOriginalName();
        $nama_file_npwp = $npwp->getClientOriginalName();

        $tujuan_upload_pdf = 'datapdf';

        $cv->move($tujuan_upload_pdf,$nama_file_cv);
        $ijazah->move($tujuan_upload_pdf,$nama_file_ijazah);
        $sertifikat->move($tujuan_upload_pdf,$nama_file_sertifikat);
        $ktp->move($tujuan_upload_pdf,$nama_file_ktp);
        $npwp->move($tujuan_upload_pdf,$nama_file_npwp);


        $tambah = DataUser::create([
            'user_id' => $request->user,
            'cv' => $nama_file_cv,
            'ijazah' => $nama_file_ijazah,
            'sertifikat' => $nama_file_sertifikat,
            'ktp' => $nama_file_ktp,
            'npwp' =>$nama_file_npwp
        ]);

        if(!$tambah){
            return redirect()->back()->with('errors', 'Import Gagal');
        }
        return redirect()->back()->withSuccess('Import Berhasil');



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
     * @param  \App\Models\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function show(DataUser $dataUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DataUser $dataUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataUser $dataUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataUser $dataUser)
    {
        //
    }
}
