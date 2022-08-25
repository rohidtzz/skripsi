<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Absen;

use App\Models\DataUser;
use App\Models\SettingGaji;
use App\Models\Pengajuan;

use App\Models\JatahGaji;

use App\Models\GajiFormat;
use App\Models\DataGaji;

use App\Exports\GajiExport;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\SettingJam;
use Barryvdh\DomPDF\Facade\Pdf;

use Str;
use Auth;

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

        $user = User::with('getjatahgaji')->get();

        // dd($user[0]->getjatahgaji()->Get('Gaji_Pokok'));



        // dd($user[0]->getpengajuan()->get()[0]->total);
        $gaji = Gaji::all();
        $settinggaji = SettingGaji::all();
        $gajipokok =    SettingGaji::where('jenis_potongan','Gaji pokok')->first();
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

        // return view('hrd.gaji.gaji',compact('user','gaji','settinggaji','gajipokok'));
        // foreach($user as $user){
        //     $user = $user->getjatahgaji();
        //     return $user;
        // }

        $datei = date_create(date('Y-m-d'));

        $datebulan = date_format($datei,"m");
        $datetahun = date_format($datei,"Y");

        $JumlahHadir = Absen::where('user_id',1)->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        // dd(json_decode($user->get()[0]['getjatahgaji']));

        $JumlahLembur = Pengajuan::all();

        // dd($JumlahLembur);


        return view('hrd.gaji.gaji',compact('user'));

    }

    public function index2()
    {

        $user = User::all();
        $gaji = Gaji::all();
        $settinggaji = SettingGaji::all();
        $gajipokok =    SettingGaji::where('jenis_potongan','Gaji pokok')->first();

        return view('hrd.gaji.gajidaily',compact('user','gaji','settinggaji','gajipokok'));
    }


    public function hitunggaji(Request $request,$id)
    {
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

        $datei = date_create(date('Y/m/d'));



        $datebulan = date_format($datei,"m");
        $datetahun = date_format($datei,"Y");

        $pph =    SettingGaji::where('jenis_potongan','potongan pph')->first();

        $JumlahAlpha = Absen::where('user_id',$id)->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();



        // dd($JumlahAlpha);
        // dd($JumlahAlpha);

        $alpha = SettingGaji::where('jenis_potongan','potongan sanksi alpha')->first();

        $totalalpha = $alpha->jumlah_potongan * $JumlahAlpha;

        $potonganbpjs = SettingGaji::where('jenis_potongan', 'potongan_asuransi')->first();



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
            'pot_uang_alpha' => $totalalpha,
            'tgl_gaji' => $request->tgl_gaji,
            'transportasi' => $request->transportasi,
            'total' => $total,
            'status' => $request->status,
            'jumlah_overtime' => $request->lembur_jam,
            'status_gaji' => 'staff'
        ]);

        if(!$test){
            return redirect()->back()->with('errors','gagal Gaji');
        }

        return redirect()->back()->withsuccess('Berhasil Gaji');
        }

        return redirect()->back()->with('errors','Pegawai sudah di gaji bulan ini');

    }

    public function gajipost2(Request $request)
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

        $JumlahHadir = Absen::where('user_id',$request->user)->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        // dd($JumlahAlpha);

        $alpha = SettingGaji::where('jenis_potongan','potongan sanksi alpha')->first();

        $Hadir = SettingGaji::where('jenis_potongan','hadir')->first();

        $totalalpha = $alpha->jumlah_potongan * $JumlahAlpha;

        $totalhadir = $Hadir->jumlah_potongan * $JumlahHadir;









        $total =  $totalhadir - $totalalpha;

        // dd($total);



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
            'uang_tambahan' => 0,
            'gaji_pokok' => 0,
            'uang_overtime' => 0,
            'pot_bpjs' => 0,
            'pot_uang_alpha' => $totalalpha,
            'tgl_gaji' => $request->tgl_gaji,
            'transportasi' => 0,
            'total' => $total,
            'status' => $request->status,
            'jumlah_overtime' => 0,
            'status_gaji' => 'daily worker'
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

        $all = JatahGaji::all();

        return view('hrd.gaji.datagaji',compact('all'));

    }

    public function readdatagaji(Request $request,$id)
    {


        $all = JatahGaji::find($id);

        return view('hrd.gaji.readdatagaji',compact('all'));

    }

    public function datagajikar(Request $request)
    {
        $user_id = Auth()->user()->id;
        $data = DataGaji::where('user_id', $user_id)
        ->firstOrFail();
       
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

    public function datagajiread(Request $request,$id)
    {

        $user = Auth()->user()->jabatan;

        if($user == 'hrd'){
            $all = Gaji::where('id',$id)->get();

        return view('hrd.gaji.datagajiread',compact('all'));
        } elseif ($user == 'direktur'){
            $all = Gaji::where('id',$id)->get();

            return view('direktur.gaji.datagajiread',compact('all'));

        } elseif ($user == 'kaeyawan') {
            $all = Gaji::where('id',$id)->get();

            return view('karyawan.gaji.datagajiread',compact('all'));
        } else{
            return redirect()->back();
        }



    }

    public function datagajireadkar(Request $request,$id)
    {
        // $id = Auth()->user()->id;

        $all = Gaji::where('user_id',$id)->get();

        return view('karyawan.gaji.datagajiread',compact('all'));

    }

    public function edit($id)
    {

        $all = Gaji::find($id);

        if(!$all || $all == null){
            return redirect()->back()->with('errors', 'Edit Gagal');
        }


        // return view('hrd/edit')->with(['data' => $data]);

        return view('hrd.gaji.gajiedit', compact('all'));


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
            'status_gaji' => $request->status_gaji
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

    public function datagajiexportpdf()
    {
        $data = Gaji::all();

        View()->share('data',$data);
        $pdf = Pdf::loadview('hrd.gaji.datagaji-pdf')->setPaper('a4', 'landscape');
        return $pdf->download('datagaji.pdf');

    }

    public function exportexcel()
    {
        return Excel::download(new GajiExport, 'gaji.xlsx');
    }

    public function dataslipgaji()
    {

        $all = Gaji::all();

        return view('hrd.gaji.dataslipgaji',compact('all'));
    }

    public function slipgaji($id)
    {

        $data = Gaji::find($id);

        View()->share('data',$data);
        $pdf = Pdf::loadview('hrd.gaji.slipgaji');
        return $pdf->stream('slipgaji.pdf');

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
