<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Absen;
use App\Models\SettingJam;;

class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('direktur.direktur');
    }

    public function lihatabsen(Request $request)
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

        return view('direktur.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }


        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('direktur.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.lihat.masuk',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }


        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('direktur.lihat.masuk',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.lihat.telat',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }


        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->orderBy('tanggal','desc')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('direktur.lihat.telat',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.lihat.sakit',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan', 'sakit')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('direktur.lihat.sakit',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.lihat.alpha',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $daftarabsen = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('direktur.lihat.alpha',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.lihat.izin',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
        }

        $daftarabsen = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('direktur.lihat.izin',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }


}
