<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Absen;
use App\Models\SettingJam;
use App\Models\DataUser;
use Illuminate\Support\Facades\Validator;

class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $datei = date_create(date('Y/m/d'));
        date_add($datei,date_interval_create_from_date_string("-1 days"));
        $kurang1hari = date_format($datei,"Y/m/d");

        // $datebulan = date_format($datei,"d");
        // $datetahun = date_format($datei,"Y");

        $absenhariini = Absen::where('tanggal',date('y/m/d'))->count();

        if($absenhariini == 0){

            $cek = true;

            $JumlahHadir = Absen::where('tanggal', $kurang1hari)->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal', $kurang1hari)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal', $kurang1hari)->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal', $kurang1hari)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal', $kurang1hari)->where('keterangan', 'izin')->count();



            return view('hrd.dashboard.hrd',compact('JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin','cek'));
        }

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuk)->whereTime('jam_masuk', '<=', $jammasuklebih5)->whereTime('jam_keluar', '>=', $jamkeluarkurang5)->whereTime('jam_keluar', '<=', $jamkeluar)->orderBy('tanggal','desc')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->whereTime('jam_masuk', '>=', $jammasuklebih5)->whereTime('jam_masuk', '<=', $jammasuklebih10)->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();


        $cek = false;



        return view('hrd.dashboard.hrd',compact('JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin','cek'));
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

        return view('direktur.absen.showabsen',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.showabsen',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.absen.masuk',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.masuk',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.telat',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.telat',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.absen.sakit',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.sakit',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.absen.alpha',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.alpha',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

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

        return view('direktur.absen.izin',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));
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

        return view('direktur.absen.izin',compact('mulai','selesai','JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function user()
    {
        $id = Auth()->user()->id;
        $data = User::find($id);

        return View('direktur.karyawan.user',compact('data'));

    }

    public function datauser(){
        $data = User::all();

        return View('direktur.karyawan.datauser',compact('data'));
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
                'password' => bcrypt($request->password),
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'status' => $request->status,
                'no_backup' => $request->no_backup,
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
            'password' => bcrypt($request->password),
                'name' => $request->name,
                'foto' => $nama_file,
                'email' => $request->email,
                'alamat' => $request->alamat,
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

    public function datauserread(Request $request,$id){

        if($id == null){
            return redirect()->back()->with('error', 'gagal read karyawan');
        }

        $data = User::find($id);
        $user = DataUser::find($id);

        if($data == null){
            return redirect()->back()->with('error', 'gagal read karyawan');
        }

        return View('direktur.karyawan.userread',compact('data','user'));
    }


}
