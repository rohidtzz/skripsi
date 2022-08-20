<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Absen;

use App\Models\DataUser;
use App\Models\SettingGaji;
use App\Models\Pengajuan;

use App\Exports\GajiExport;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\SettingJam;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\JatahGaji;

use Illuminate\Http\Request;

class JatahGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all = JatahGaji::all();

        return view('hrd.gaji.ration', compact('all'));


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
