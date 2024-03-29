<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengajuan;

class PengajuanController extends Controller
{


    public function pengajuan()
    {


        if(auth()->user()->jabatan == 'karyawan'){
            $id = auth()->user()->id;

            $all = Pengajuan::where('user_id', $id)->get();
            return view('karyawan.pengajuan.pengajuan', compact('all'));
        }

        if(auth()->user()->jabatan == 'hrd'){
            $all = Pengajuan::all();
            return view('hrd.pengajuan.pengajuan', compact('all'));
        }

        if(auth()->user()->jabatan == 'direktur'){
            $all = Pengajuan::all();
            return view('direktur.pengajuan.pengajuan', compact('all'));
        }


    }

    public function pengajuanpost(Request $request)
    {

        // $validator = $request->validate([
        //     'tanggal' => 'required',
        //     'keterangan' => 'required',
        //     'tanggal' => 'required',
        //     'mulai' =>'required',
        //     'selesai' => 'required'
        // ]);

        // if(!$validator){

        //     return redirect('karyawan.pengajuan');
        // }

        $id = auth()->user()->id;
            $awal = date_create($request->jammulai);
            $akhir = date_create($request->jamselesai);
            $diff =    date_diff($awal,$akhir);
            // dd($total->h);

            $total = $diff->h;


        $test = Pengajuan::create([
            'user_id' =>  $id,
            'keterangan' => $request->keterangan,
            'alasan' => $request->alasan,
            'tanggal' => date('Y/m/d'),
            'mulai' => $request->mulai,
            'selesai' =>$request->selesai,
            'jam_mulai' => $request->jammulai,
            'jam_selesai' => $request->jamselesai,
            'jam_lembur' => $total,
            'status' => 'pending'
        ]);

        if(!$test){

            if(auth()->user()->jabatan == 'karyawan'){
                return redirect('karyawan/pengajuan')->with('errors', 'gagal Buat Pengajuan');
            }

            if(auth()->user()->jabatan == 'hrd'){
                return redirect('hrd/pengajuan')->with('errors', 'gagal Buat Pengajuan');
            }

            if(auth()->user()->jabatan == 'direktur'){
                return redirect('direktur/pengajuan')->with('errors', 'gagal Buat Pengajuan');

            }


        }

        // dd($test);

        if(auth()->user()->jabatan == 'karyawan'){
            return redirect('karyawan/pengajuan')->withSuccess('Berhasil Buat Pengajuan');
        }

        if(auth()->user()->jabatan == 'hrd'){
            return redirect('hrd/pengajuan')->withSuccess('Berhasil Buat Pengajuan');
        }

        if(auth()->user()->jabatan == 'direktur'){
            return redirect('direktur/pengajuan')->withSuccess('Berhasil Buat Pengajuan');

        }




        // return view('karyawan.cuti');
    }

    public function pengajuanterima(Request $request, $id)
    {
        $idd = Pengajuan::find($id);

        if(!$idd || $idd == null){

            return redirect()->back()->with('errors', 'gagal Terima Pengajuan');

        }

        Pengajuan::where('id',$id)->update([
            'status' => 'disetujui'
        ]);

        return redirect()->back()->withSuccess('Berhasil Terima Pengajuan');


    }

    public function pengajuantolak(Request $request, $id)
    {
        $idd = Pengajuan::find($id);

        if(!$idd || $idd == null){

            return redirect()->back()->with('errors', 'gagal Tolak Pengajuan');

        }

        Pengajuan::where('id',$id)->update([
            'status' => 'ditolak'
        ]);

        return redirect()->back()->withSuccess('Berhasil Tolak Pengajuan');
    }

    public function pengajuanedit(Request $request, $id)
    {
        $data = Pengajuan::find($id);

        return view('hrd.pengajuan.pengajuanedit', compact('data'));
    }

    public function pengajuaneditpost(Request $request,$id)
    {

        $idd = Pengajuan::find($id);

        if(!$idd || $idd == null){

            return redirect('hrd/pengajuan')->with('errors', 'gagal Edit Pengajuan');

        }

        Pengajuan::where('id',$id)->update([
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'alasan' => $request->alasan,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'status' => $request->status
        ]);

        return redirect('hrd/pengajuan')->withSuccess('Berhasil Edit Pengajuan');

    }

    public function destroy($id)
    {
        $pengajuan = Pengajuan::find($id);

        if(!$pengajuan || $id == null){
            return redirect('/hrd/pengajuan')->with('errors', 'Hapus Gagal');
        }

        $cobadestroy = Pengajuan::find($id)->delete();

        if($cobadestroy){
            return redirect('/hrd/datapengajuan')->withSuccess('Hapus Berhasil');
        }

    }

    public function datapengajuan()
    {


        if(auth()->user()->jabatan == 'hrd'){
            $all = Pengajuan::all();
            return view('hrd.pengajuan.datapengajuan', compact('all'));
        }

        if(auth()->user()->jabatan == 'direktur'){
            $all = Pengajuan::all();
            return view('direktur.pengajuan.datapengajuan', compact('all'));
        }


    }


}
