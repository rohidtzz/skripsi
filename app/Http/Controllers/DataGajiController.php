<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GajiFormat;
use App\Models\DataGaji;
use App\Models\User;
use App\Models\Pengajuan;

use Str;
use Auth;

class DataGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataGaji::all();

        foreach($data as $item) {
            $jamlembur = Pengajuan::where('keterangan', 'lembur')
            ->where('status', 'disetujui')
            ->where('user_id', $item->user_id)
            ->sum('jam_lembur');

            $jamkerja = GajiFormat::where('type', 'duration')->firstOrFail();
            $jamkerja = Str::slug($jamkerja->name);
            $gajiperjam = GajiFormat::where('type', 'income')->firstOrFail();
            $gajiperjam = Str::slug($gajiperjam->name);
            $lembur = GajiFormat::where('type', 'overtime')->firstOrFail();
            $lembur = Str::slug($lembur->name);
            $potongan = GajiFormat::where('type', 'credit')->get();
            $bonus = GajiFormat::where('type', 'debit')->get();

            $payload = json_decode($item->data_gaji);

            $lembur = (int)$payload->{$lembur} * $jamlembur;
            $gaji = $payload->{$jamkerja} * $payload->{$gajiperjam};

            $credit = 0;
            foreach($potongan as $pt) {
                $credit += $payload->{Str::slug($pt->name)};
            }

            $debit = 0;
            foreach($bonus as $bn) {
                $debit += $payload->{Str::slug($bn->name)};
            }

            $item->potongan = str_replace(',','.', number_format($credit));
            $item->bonus = str_replace(',','.', number_format($debit));
            $item->gaji = str_replace(',','.', number_format($gaji));
            $item->lembur = str_replace(',','.', number_format($lembur));
        }

        return view('hrd.penggajian.data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gajiformat = GajiFormat::all();
        $users = User::all();
        return view('hrd.penggajian.data.form', compact('gajiformat', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);

        $user = Auth::user();

        DataGaji::create([
            'user_id' => $user->id,
            'data_gaji' => json_encode($request->except(['_token', '_method'])),
        ]);

        return redirect()->back()->with('success', 'Berhasil memasukan gaji');
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
        $gajiformat = GajiFormat::all();
        $users = User::all();
        $data = DataGaji::findOrFail($id);
        $data->data_gaji = json_decode($data->data_gaji);
        return view('hrd.penggajian.data.form', compact('gajiformat', 'users', 'data'));
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
        $request->validate([
            '*' => 'required',
        ]);

        $user = Auth::user();

        DataGaji::where('id', $id)
        ->update([
            'user_id' => $user->id,
            'data_gaji' => json_encode($request->except(['_token', '_method'])),
        ]);

        return redirect()->back()->with('success', 'Berhasil mengedit gaji');
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
