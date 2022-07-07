<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Absen;

class HrdController extends Controller
{

    public function index()
    {

        return view('hrd.hrd');
    }

    public function lihatabsen(request $request)
    {

        if($request->tanggalinput){
            // Absen::where('tnaggal', $request->tanggalinput);

            $id = auth()->user()->id;

        $daftarabsen = Absen::all()->where('tanggal',$request->tanggalinput);

        $JumlahHadir = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

        };

        $id = auth()->user()->id;



        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));


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






        // return view('hrd.showabsen',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));


    }

    public function lihatabsenmasuk(Request $request)
    {

        if($request->tanggalinput){
            // Absen::where('tnaggal', $request->tanggalinput);

            $id = auth()->user()->id;

        $daftarabsen = Absen::where('keterangan', 'masuk')->where('tanggal',$request->tanggalinput)->get();
        // $daftar = Absen::where('keterangan', 'masuk');

        //  dd($daftarabsen);

        $JumlahHadir = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.masuk',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

        };

        $id = auth()->user()->id;



        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan','masuk')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.masuk',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function lihatabsentelat(Request $request)
    {

        if($request->tanggalinput){
            // Absen::where('tnaggal', $request->tanggalinput);

            $id = auth()->user()->id;

        $daftarabsen = Absen::where('keterangan', 'telat')->where('tanggal',$request->tanggalinput)->get();
        // $daftar = Absen::where('keterangan', 'masuk');

        //  dd($daftarabsen);

        $JumlahHadir = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.telat',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

        };

        $id = auth()->user()->id;



        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan','telat')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.telat',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }



    public function lihatabsensakit(Request $request)
    {

        if($request->tanggalinput){
            // Absen::where('tnaggal', $request->tanggalinput);

            $id = auth()->user()->id;

        $daftarabsen = Absen::where('keterangan', 'sakit')->where('tanggal',$request->tanggalinput)->get();
        // $daftar = Absen::where('keterangan', 'masuk');

        //  dd($daftarabsen);

        $JumlahHadir = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.sakit',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

        };

        $id = auth()->user()->id;



        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan','sakit')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.sakit',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function lihatabsenalpha(Request $request)
    {

        if($request->tanggalinput){
            // Absen::where('tnaggal', $request->tanggalinput);

            $id = auth()->user()->id;

        $daftarabsen = Absen::where('keterangan', 'alpha')->where('tanggal',$request->tanggalinput)->get();
        // $daftar = Absen::where('keterangan', 'masuk');

        //  dd($daftarabsen);

        $JumlahHadir = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.alpha',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

        };

        $id = auth()->user()->id;



        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan','alpha')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.alpha',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function lihatabsenizin(Request $request)
    {

        if($request->tanggalinput){
            // Absen::where('tnaggal', $request->tanggalinput);

            $id = auth()->user()->id;

        $daftarabsen = Absen::where('keterangan', 'izin')->where('tanggal',$request->tanggalinput)->get();
        // $daftar = Absen::where('keterangan', 'masuk');

        //  dd($daftarabsen);

        $JumlahHadir = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',$request->tanggalinput)->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.izin',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

        };

        $id = auth()->user()->id;



        $daftarabsen = Absen::where('tanggal', date('Y/m/d'))->where('keterangan','izin')->get();

        $JumlahHadir = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'masuk')->count();

        $JumlahAlpha = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'alpha')->count();

        $JumlahTelat = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'telat')->count();

        $JumlahSakit = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'sakit')->count();

        $JumlahIzin = Absen::where('tanggal',date('y/m/d'))->where('keterangan', 'izin')->count();

        $JumlahAbsen = Absen::all()->count();

        return view('hrd.lihat.izin',compact('JumlahAbsen','daftarabsen','JumlahHadir','JumlahAlpha','JumlahTelat', 'JumlahSakit','JumlahIzin'));

    }

    public function edit($id)
    {

        $data = Absen::where('id',$id)->get();

        if(!$data || $data == null){
            return redirect('/hrd/lihatabsen');
        }


        // return view('hrd/edit')->with(['data' => $data]);

        return view('hrd/edit', compact('data'));


    }

    public function update(Request $request, $id)
    {
        $idabsen = Absen::find($id);

        if(!$idabsen && $idabsen == null){

            return redirect('hrd/absen/lihatabsen');

        }

        Absen::where('id',$id)->update([
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar
        ]);

        return redirect('hrd/lihatabsen');

    }

    public function destroy($id)
    {
        $absen = Absen::find($id);

        if(!$absen && $absen || null){
            return redirect('/hrd/lihatabsen');
        }

        $cobadestroy = Absen::find($id)->delete();

        if($cobadestroy){
            return redirect('/hrd/lihatabsen');
        }

    }
}
