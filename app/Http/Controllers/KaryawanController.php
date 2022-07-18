<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Absen;
use App\Models\User;

use App\Models\SettingJam;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    }

    public function dashboard()
    {

        return view('karyawan.karyawan');

    }

    public function Showabsen(Request $request){

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

        $id = auth()->user()->id;


        if($mulai && $selesai){

        $daftarabsen = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }


        $daftarabsen = Absen::where('user_id',$id)->where('tanggal', date('Y/m/d'))->get();

        $JumlahHadir = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        // $id = auth()->user()->id;

        // $daftarabsen = User::find($id)->getabsen;

        // $JumlahHadir = User::find($id)->getabsen()->where('keterangan', 'masuk')->count();

        // // $JumlahHadir = Absen::where('user_id',$id)->get('keterangan')->count();

        // $JumlahAlpha = User::find($id)->getabsen()->where('keterangan', 'alpha')->count();

        // $JumlahTelat = User::find($id)->getabsen()->where('keterangan', 'telat')->count();

        // $JumlahSakit = User::find($id)->getabsen()->where('keterangan', 'sakit')->count();






        // return view('karyawan.showabsen',compact('daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit'));

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

        $id = auth()->user()->id;


        if($mulai && $selesai){

        $daftarabsen = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.masuk',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }


        $daftarabsen = Absen::where('user_id',$id)->where('tanggal', date('Y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.masuk',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        $id = auth()->user()->id;


        if($mulai && $selesai){



        $daftarabsen = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.telat',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }


        $daftarabsen = Absen::where('user_id',$id)->where('tanggal', date('Y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.telat',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        $id = auth()->user()->id;

        if($mulai && $selesai){



        $daftarabsen = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->get();

        $JumlahHadir = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.sakit',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $daftarabsen = Absen::where('user_id',$id)->where('tanggal', date('Y/m/d'))->where('keterangan', 'sakit')->get();

        $JumlahHadir = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.sakit',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        $id = auth()->user()->id;


        if($mulai && $selesai){



        $daftarabsen = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.alpha',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $daftarabsen = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();

        $JumlahHadir = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.alpha',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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


        $id = auth()->user()->id;


        if($mulai && $selesai){



        $daftarabsen = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->where('keterangan', 'izin')->get();

        $JumlahHadir = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->count();

        $JumlahTelat = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->whereDate('tanggal', '>=' , $mulai)->whereDate('tanggal', '<=', $selesai )->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.izin',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $daftarabsen = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->get();

        $JumlahHadir = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('user_id',$id)->where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::where('user_id',$id)->count();

        return view('karyawan.lihat.izin',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

}
