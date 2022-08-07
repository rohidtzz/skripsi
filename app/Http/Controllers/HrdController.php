<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Absen;

use App\Models\SettingJam;
use App\Models\DataUser;

use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Exports\AbsenExport;

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Validator;

class HrdController extends Controller
{

    public function index()
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

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();


        return view('hrd.hrd',compact('JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
    }

    public function tambahabsen()
    {
        $user = User::all();

        return View('/hrd/tambahabsen',compact('user'));
    }

    public function tambahabsenpost(Request $request)
    {
        Absen::create([
            'user_id' => $request->user,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tgl,
            'jam_masuk' => $request->masuk,
            'jam_keluar' => $request->keluar,
        ]);

        return redirect()->back()->withSuccess('Berhasil Tambah Absen');
    }

    public function lihatabsen(request $request)
    {


        $mulai = $request->mulai;
        $selesai = $request->selesai;


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


        if($mulai && $selesai){



        $daftarabsen = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.showabsen',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $mulai = null;
        $selesai = null;






        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.showabsen',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));


        // $id = auth()->user()->id;

        // $daftarabsen = Absen::all();

        // $daftarabsen =  Absen::with('nama')->paginate(4);

        // $daftarabsen =  Absen::with('nama')->paginate(4);

        // $daftarabsen = Absen::all();


        // $nama = User::with('getam')->get()->where('id', 'asd');


        // dd($nama);


        // $JumlahHadir = Absen::where('keterangan', 'masuk')->count();

        // $JumlahHadir = Absen::where('user_id',$id)->get('keterangan')->count();

        // $JumlahAlpha = Absen::where('keterangan', 'alpha')->count();

        // $JumlahTelat = Absen::where('keterangan', 'telat')->count();

        // $JumlahSakit = Absen::where('keterangan', 'sakit')->count();

        // $JumlahIzin = Absen::where('keterangan', 'izin')->count();

        // $JumlahAbsen = Absen::all()->count();






        // return view('hrd.showabsen',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));


    }

    public function lihatabsenmasuk(Request $request)
    {
        $mulai = $request->mulai;
        $selesai = $request->selesai;

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


        if($mulai && $selesai){

        $daftarabsen = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->orderBy('tanggal','desc')->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.masuk',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $mulai = null;
        $selesai = null;


        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.masuk',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
    }

    public function lihatabsentelat(Request $request)
    {
        $mulai = $request->mulai;
        $selesai = $request->selesai;

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


        if($mulai && $selesai){



        $daftarabsen = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.telat',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $mulai = null;
        $selesai = null;


        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.telat',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }



    public function lihatabsensakit(Request $request)
    {

        $mulai = $request->mulai;
        $selesai = $request->selesai;

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


        if($mulai && $selesai){



        $daftarabsen = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->get();

        $JumlahHadir = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.sakit',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $mulai = null;
        $selesai = null;

        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan', 'sakit')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.sakit',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function lihatabsenalpha(Request $request)
    {

        $mulai = $request->mulai;
        $selesai = $request->selesai;

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


        if($mulai && $selesai){



        $daftarabsen = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.alpha',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $mulai = null;
        $selesai = null;

        $daftarabsen = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.alpha',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function lihatabsenizin(Request $request)
    {

        $mulai = $request->mulai;
        $selesai = $request->selesai;

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


        if($mulai && $selesai){



        $daftarabsen = Absen::whereDate('tanggal', '>=' , $mulai)->where('keterangan', 'izin')->get();

        $JumlahHadir = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.izin',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }
        $mulai = null;
        $selesai = null;

        $daftarabsen = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.izin',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function edit($id)
    {

        $data = Absen::where('id',$id)->get();

        if(!$data || $data == null){
            return redirect('/hrd/lihatabsen')->with('errors', 'Edit Gagal');
        }


        // return view('hrd/edit')->with(['data' => $data]);

        return view('hrd/edit', compact('data'));


    }

    public function update(Request $request, $id)
    {
        $idabsen = Absen::find($id);

        if(!$idabsen && $idabsen == null){

            return redirect('hrd/absen/lihatabsen')->with('errors', 'Edit Gagal');

        }

        Absen::where('id',$id)->update([
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar
        ]);

        return redirect('hrd/lihatabsen')->withSuccess('Edit Berhasil');

    }

    public function destroy($id)
    {
        $absen = Absen::find($id);

        if(!$absen || $absen == null){
            return redirect('/hrd/lihatabsen')->with('errors', 'Hapus Gagal');
        }

        $cobadestroy = Absen::find($id)->delete();

        if($cobadestroy){
            return redirect('/hrd/lihatabsen')->withSuccess('Hapus Berhasil');
        }

    }


    public function tambahuser(Request $request)
    {
        $data = User::all();

        return view('hrd.tambahuser',compact('data'));
    }

    public function tambahuserpost(Request $request)
    {

        if($request == null){
            return redirect()->back()->with('errors', 'Import Gagal');
        }

        $this->validate($request, [
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);



        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
        //     $tambah->foto = $request->file('foto')->getClientOriginalName();

        // }

        $file = $request->file('foto');



		$nama_file = $file->getClientOriginalName();


      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'foto';


		$file->move($tujuan_upload,$nama_file);








        $tambah = User::create([
            'no_identitas' => $request->id_identitas,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'email' => $request->email,
            'foto' => $nama_file,
            'jabatan' => $request->jabatan,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'npwp' => $request->npwp,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
            'no_backup' => $request->no_backup,
            'waktu_aktif' => date('Y/m/d'),
            'status_pekerjaan' => 'masuk',
        ]);



        // $tambah = User::create([
        //     'no_identitas' => $request->id_identitas,
        //     'password' => bcrypt($request->password),
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'foto' => $request->
        //     'jabatan' => $request->jabatan,
        //     'gender' => $request->gender,
        //     'alamat' => $request->alamat,
        //     'nik' => $request->nik,
        //     'npwp' => $request->npwp,
        //     'no_hp' => $request->no_hp,
        //     'status' => $request->status,
        //     'no_backup' => $request->no_backup,
        //     'waktu_aktif' => date('Y/m/d'),
        //     'status_pekerjaan' => 'masuk',
        // ]);

        if(!$tambah){
            return redirect()->back()->with('errors', 'Import Gagal');
        }
        return redirect()->back()->withSuccess('Import Berhasil');





    }

    public function import_excel(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);

		// import data
		$im = Excel::import(new UserImport, public_path('/file_siswa/'.$nama_file));

        // dd($im);

        if($im == null){
            return redirect('/hrd/tambahuser')->with('errors', 'Import Gagal : no_identitas dan Email harus unique');
        }
		// notifikasi dengan session
		// Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/hrd/tambahuser')->withSuccess('Import Berhasil');
	}

    public function user()
    {
        $id = Auth()->user()->id;
        $data = User::find($id);

        return View('hrd.user',compact('data'));

    }

    public function datauser(Request $request){


        if($request->divisi){
            $data = User::where('jabatan', $request->divisi)->get();

            return View('hrd.datauser',compact('data'));
        }

        $data = User::all();

        return View('hrd.datauser',compact('data'));
    }

    public function datauserread(Request $request,$id){

        if($id == null){
            return redirect()->back()->with('error', 'gagal read karyawan');
        }

        $data = User::find($id);
        $user = DataUser::find($id);

        if($data == null){
            return redirect()->back()->with('error', 'gagal read karyawan');
        }

        return View('hrd.userread',compact('data','user'));
    }

    public function datauseredit(Request $request,$id)
    {

        $data = User::find($id);

        return View('hrd.useredit',compact('data'));

    }

    public function usereditpost(Request $request)
    {

        $iduser = User::find($request->id);

        if(!$iduser && $request->id == null){

            return redirect()->back()->with('errors', 'Edit Gagal');

        }

        $validator = Validator::make($request->all(), [
            'foto' => 'required',
        ]);

        if($validator->fails()){

            $update = User::where('id',$request->id)->update([
                'no_identitas' => $request->id_identitas,
                'password' => bcrypt($request->password),
                'name' => $request->name,
                'email' => $request->email,
                'jabatan' => $request->jabatan,
                'gender' => $request->gender,
                'alamat' => $request->alamat,
                'nik' => $request->nik,
                'npwp' => $request->npwp,
                'no_hp' => $request->no_hp,
                'status' => $request->status,
                'no_backup' => $request->no_backup,
                'tgl_lahir' => $request->tgl_lahir
            ]);

            return redirect()->back()->withSuccess('Edit Berhasil');

        }

            // $this->validate($request, [
            // 	'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048'
            // ]);



        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
        //     $tambah->foto = $request->file('foto')->getClientOriginalName();

        // }

        $file = $request->file('foto');

		$nama_file = $file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'foto';
		$file->move($tujuan_upload,$nama_file);

        User::where('id',$request->id)->update([
            'no_identitas' => $request->id_identitas,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'email' => $request->email,
            'foto' => $nama_file,
            'jabatan' => $request->jabatan,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'npwp' => $request->npwp,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
            'no_backup' => $request->no_backup,
        ]);

        // User::where('id',$id)->update([
        //     'keterangan' => $request->keterangan,
        //     'tanggal' => $request->tanggal,
        //     'jam_masuk' => $request->jam_masuk,
        //     'jam_keluar' => $request->jam_keluar
        // ]);

        return redirect()->back()->withSuccess('Edit Berhasil');

    }

    public function userdestroy($id)
    {
        $User = User::find($id);

        if(!$User || $id == null){
            return redirect()->back()->with('errors', 'Hapus Gagal');
        }

        $cobadestroy = User::find($id)->delete();

        if($cobadestroy){
            return redirect()->back()->withSuccess('Hapus Berhasil');
        }

    }

    public function exportuser()
    {
        return Excel::download(new UserExport, 'karyawan.xlsx');
    }

    public function exportabsen()
    {
        return Excel::download(new AbsenExport, 'absen.xlsx');
    }




}
