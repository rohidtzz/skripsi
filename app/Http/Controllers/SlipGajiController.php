<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GajiFormat;
use App\Models\DataGaji;
use App\Models\User;
use App\Models\Pengajuan;

use Str;
use Auth;

class SlipGajiController extends Controller
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
            $jamkerja = GajiFormat::where('type', 'duration')->firstOrFail();
            $jamkerja = Str::slug($jamkerja->name);
            $gajiperjam = GajiFormat::where('type', 'income')->firstOrFail();
            $gajiperjam = Str::slug($gajiperjam->name);            
            $payload = json_decode($item->data_gaji);
            $gaji = $payload->{$jamkerja} * $payload->{$gajiperjam};
            $item->gaji = str_replace(',','.', number_format($gaji));
        }
        return view('hrd.penggajian.slip.index', compact('data'));
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
        $data = DataGaji::findOrFail($id);
       
        $jamkerja = GajiFormat::where('type', 'duration')->firstOrFail();
        $jamkerja = Str::slug($jamkerja->name);
        $gajiperjam = GajiFormat::where('type', 'income')->firstOrFail();
        $gajiperjam = Str::slug($gajiperjam->name);            
        $payload = json_decode($data->data_gaji);
        $gaji = $payload->{$jamkerja} * $payload->{$gajiperjam};
        $data->penghasilan = (object)[
            'gaji' =>  str_replace(',','.', number_format($gaji))
        ];
        $data->potongan = (object)[];

        $debit = GajiFormat::where('type', 'debit')->get();
        $credit = GajiFormat::where('type', 'credit')->get();

        $data->penghasilan_total = $gaji;
        foreach($debit as $db) {
            if(property_exists($payload, Str::slug($db->name))) {
                $amount = $payload->{Str::slug($db->name)};
                $data->penghasilan_total += $amount;
                $amount = str_replace(',','.', number_format($amount));
                $data->penghasilan->{$db->name} = $amount;
            }
        }
        
        $data->potongan_total = 0;
        foreach($credit as $cr) {
            if(property_exists($payload, Str::slug($cr->name))) {
                $amount = $payload->{Str::slug($cr->name)};
                $data->potongan_total += $amount;
                $amount = str_replace(',','.', number_format($amount));
                $data->potongan->{$cr->name} = $amount;
            }
        }
       
        return view('hrd.penggajian.slip.show', compact('data'));
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

    public function send($id) {
        $data = DataGaji::findOrFail($id);
       
        $jamkerja = GajiFormat::where('type', 'duration')->firstOrFail();
        $jamkerja = Str::slug($jamkerja->name);
        $gajiperjam = GajiFormat::where('type', 'income')->firstOrFail();
        $gajiperjam = Str::slug($gajiperjam->name);            
        $payload = json_decode($data->data_gaji);
        $gaji = $payload->{$jamkerja} * $payload->{$gajiperjam};
        $data->penghasilan = (object)[
            'gaji' =>  str_replace(',','.', number_format($gaji))
        ];
        $data->potongan = (object)[];

        $debit = GajiFormat::where('type', 'debit')->get();
        $credit = GajiFormat::where('type', 'credit')->get();

        $data->penghasilan_total = $gaji;
        foreach($debit as $db) {
            $amount = $payload->{Str::slug($db->name)};
            $data->penghasilan_total += $amount;
            $amount = str_replace(',','.', number_format($amount));
            $data->penghasilan->{$db->name} = $amount;
        }
        
        $data->potongan_total = 0;
        foreach($credit as $cr) {
            $amount = $payload->{Str::slug($cr->name)};
            $data->potongan_total += $amount;
            $amount = str_replace(',','.', number_format($amount));
            $data->potongan->{$cr->name} = $amount;
        }

        $email = User::findOrFail($payload->users)?->email;

        $sendmail = \Mail::to($email)->send(new \App\Mail\SlipGaji($data));
        
        if($sendmail == null) {
            return redirect()->back()->with('success', 'Berhasil mengirim slipgaji');
        }else{
            return redirect()->back()->with('error', 'Gagal mengirim slipgaji');
        }
    }
}
