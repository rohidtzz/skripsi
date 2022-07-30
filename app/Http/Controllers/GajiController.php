<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Absen;

use App\Models\DataUser;
use App\Models\SettingGaji;
use App\Models\Pengajuan;

use App\Models\SettingJam;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::all();
        $gaji = Gaji::all();
        $settinggaji = SettingGaji::all();
        $gajipokok =    SettingGaji::where('jenis_potongan','Gaji pokok')->first();

        return view('hrd.gaji',compact('user','gaji','settinggaji','gajipokok'));
    }

    public function gajipost(Request $request)
    {
        // $datk = date_create($request->tgl_gaji);

        // $datp = date_format($datk,"m/Y");

        //     $gajik = Gaji::whereDate('tgl_gaji', $datp)->first();

        //     dd($gajik);

        // if(!$gajik){
        $datei = date_create($request->tgl_gaji);

        $datebulan = date_format($datei,"m");
        $datetahun = date_format($datei,"Y");

        $result = Gaji::where('user_id',$request->user)->whereYear('tgl_gaji' , $datetahun)->whereMonth('tgl_gaji' , $datebulan)->first();

            // dd($result);
        if(!$result){

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


        $settinggaji = SettingGaji::all();
        $gajipokok =    SettingGaji::where('jenis_potongan','Gaji Pokok')->first();

        $datei = date_create($request->tgl_gaji);

        $datebulan = date_format($datei,"m");
        $datetahun = date_format($datei,"Y");

        $pph =    SettingGaji::where('jenis_potongan','potongan pph')->first();

        $JumlahAlpha = Absen::where('user_id',$request->user)->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        // dd($JumlahAlpha);

        $alpha = SettingGaji::where('jenis_potongan','potongan sanksi alpha')->first();

        $totalalpha = $alpha->jumlah_potongan * $JumlahAlpha;

        $potonganbpjs = SettingGaji::where('jenis_potongan', 'potongan_asuransi')->first();





        $uanglembur = $request->lembur;
        $lemburjam = $request->lembur_jam;

        $totallembur = $uanglembur * $lemburjam;

        $total = $gajipokok->jumlah_potongan + $totallembur - $potonganbpjs->jumlah_potongan - $pph->jumlah_potongan - $totalalpha;





        // $lembur = Pengajuan::where('user_id',$request->user)->where('keterangan','lembur')->first();

        // $waktustart = $lembur->jam_mulai;
        // $waktuend = date("Y-m-d h:i:sa");
        // //echo $waktustart;
        // //echo $waktuend;

        // $datetime1 = new DateTime($waktustart);//start time
        // $datetime2 = new DateTime($waktuend);//end time
        // $durasi = $datetime1->diff($datetime2);
        // echo $durasi->format('%Y tahun %m bulan %d hari %H jam %i menit %s detik');

        // dd($lembur);


        $test = Gaji::create([
            'user_id' => $request->user,
            'uang_tambahan' => $request->tambahan,
            'gaji_pokok' => $gajipokok->jumlah_potongan,
            'uang_overtime' => $totallembur,
            'pot_bpjs' => $potonganbpjs->jumlah_potongan,
            'tgl_gaji' => $request->tgl_gaji,
            'transportasi' => $request->transportasi,
            'total' => $total,
            'status' => $request->status,
            'jumlah_overtime' => $request->lembur_jam,
        ]);

        if(!$test){
            return redirect()->back()->with('errors','gagal Gaji');
        }

        return redirect()->back()->withsuccess('Berhasil Gaji');
        }

        return redirect()->back()->with('errors','Pegawai sudah di gaji bulan ini');

    }

    public function datagaji(Request $request)
    {

        $all = Gaji::all();

        return view('hrd.datagaji',compact('all'));

    }

    public function datagajikar(Request $request)
    {

        $id = Auth()->user()->id;

        $all = Gaji::where('user_id',$id)->get();

        return view('hrd.datagaji',compact('all'));

    }

    public function datagajiread(Request $request,$id)
    {


        $all = Gaji::where('id',$id)->get();

        return view('hrd.datagajiread',compact('all'));

    }

    public function datagajireadkar(Request $request,$id)
    {
        // $id = Auth()->user()->id;

        $all = Gaji::where('user_id',$id)->get();

        return view('hrd.datagajiread',compact('all'));

    }

    public function edit($id)
    {

        $all = Gaji::find($id);

        if(!$all || $all == null){
            return redirect()->back()->with('errors', 'Edit Gagal');
        }


        // return view('hrd/edit')->with(['data' => $data]);

        return view('hrd.gajiedit', compact('all'));


    }

    public function editpost(Request $request)
    {

        $idd = Gaji::find($request->id);

        if(!$idd || $idd == null){

            return redirect()->back()->with('errors', 'gagal Edit Gaji');

        }

        $potonganbpjs = SettingGaji::where('jenis_potongan', 'potongan_asuransi')->first();

        $test = Gaji::where('id',$request->id)->update([
            'uang_tambahan' => $request->tambahan,
            'gaji_pokok' => $request->gaji_pokok,
            'uang_overtime' => $request->lembur,
            'pot_bpjs' => $potonganbpjs->jumlah_potongan,
            'tgl_gaji' => $request->tgl_gaji,
            'transportasi' => $request->transportasi,
            'total' => $request->total,
            'status' => $request->status,
            'jumlah_overtime' => $request->lembur_jam,
        ]);

        if(!$test){
            return redirect()->back()->with('errors','gagal edit Gaji');
        }


        return redirect('hrd/datagaji')->withSuccess('Berhasil Edit Gaji');


    }

    public function destroy($id)
    {
        $gaji = Gaji::find($id);

        if(!$gaji || $id == null){
            return redirect()->back()->with('errors', 'Hapus Gaji Gagal');
        }

        $cobadestroy = Gaji::find($id)->delete();

        if($cobadestroy){
            return redirect()->back()->withSuccess('Hapus Gaji Berhasil');
        }

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
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
}
