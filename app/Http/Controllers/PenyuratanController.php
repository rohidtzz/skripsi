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

        $mulai = $request->mulai;
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


        if($mulai){

        // $all = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get();

        // $JumlahAbsen = Absen::all()->count();

        // return view('hrd.penyuratan',compact('mulai','selesai','JumlahAbsen','all'));
        // }

        // $mulai = null;
        $datei = date_create($mulai);
        $datebulan = date_format($datei,"m");
        $datetahun = date_format($datei,"Y");
        // $selesai = null;

        // $all = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();
        $JumlahAbsen = Absen::all()->count();

        $all = Absen::whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get();

        $user = User::with('getabsen')->get();
        // foreach($user as $u){
        //     dd($u->getabsen->first()->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get());
        // }

        // foreach($user as $use){
        //     $use->getabsen = $use;
        // }

        // dd($use);

        $use = User::with('getabsen')->get();

        //  foreach($use as $u){
        //     $usee = $u->getabsen->first()->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get();
        // }





        //  dd($user->with('getuser')->get());
        return view('hrd.penyuratan',compact('JumlahAbsen','all','jammasuklebih10','jamkeluarkurang5','mulai','user','datebulan','datetahun'));

        }

        $datei = date_create($mulai);
        $datebulan = date_format($datei,"m");
        $datetahun = date_format($datei,"Y");

        $mulai = null;

        $all = Absen::whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();


        $use = User::with('getabsen')->get();

        $user = User::with('getabsen')->get();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.penyuratan',compact('JumlahAbsen','all','jammasuklebih10','jamkeluarkurang5','mulai','user','datebulan','datetahun'));
    }

    public function penyuratanedit(Request $request,$id)
    {


        $all = Penyuratan::find($id);

        return view('hrd.penyuratanedit',compact('all'));


    }


    public function penyurataneditpost(Request $request)
    {


        $idd = Penyuratan::find($request->id);

        if(!$idd || $idd == null){

            return redirect()->back()->with('errors', 'gagal Edit penyuratan');

        }

        Penyuratan::where('id',$request->id)->update([
            'to_user_id' => $request->id,
            'alpha' => $request->alpha,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->date
        ]);

        return redirect('hrd/datapenyuratan')->withSuccess('Berhasil Edit penyuratan');


    }

    public function penyuratankirim($id,$alpha)
    {


        $user = User::find($id);

        if(!$user || $id == null || $user == null){
            return redirect()->back()->with('errors', 'beriperingatan Gagal');
        }


        return view('hrd.beriperingatan',compact('user','alpha'));
    }

    public function penyuratankirimpost(Request $request)
    {

        $id = Auth()->user()->id;

        // dd($request->all());

        $test = Penyuratan::create([
            'user_id' => $id,
            'to_user_id' => $request->id,
            'alpha' => $request->alpha,
            'deskripsi' => $request->deskripsi,
            'tanggal' => date('Y-m-d')
        ]);

        if(!$test){
            return redirect()->back()->with('errors', 'gagal kirim peringatan');
        }

        return redirect('/hrd/datapenyuratan')->with('success', 'berhasil kirim peringatan');


    }

    public function datapenyuratan()
    {

        $jabatan = Auth()->user()->jabatan;

        if($jabatan == 'hrd'){
            $data = Penyuratan::all();

        return view('hrd.datapenyuratan',compact('data'));
        } elseif ($jabatan == 'direktur'){
            $data = Penyuratan::all();

        return view('direktur.datapenyuratan',compact('data'));
        }

    }

    public function datapenyuratankar()
    {
        $id = Auth()->user()->id;

        $data = Penyuratan::where('to_user_id',$id)->get();


        return view('karyawan.datapenyuratan',compact('data'));
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
