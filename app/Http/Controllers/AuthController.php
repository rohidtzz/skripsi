<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function login(Request $request)
    {
        $request->validate([
            'no_identitas' => 'required',
            'password' => 'required',
        ]);

        $auths = Auth::attempt(['no_identitas' => $request->no_identitas, 'password' => $request->password],true);

        if($auths){

            if (auth()->user()->jabatan == 'hrd') {
                return redirect('hrd/home')->withSuccess('Login Berhasil Selamat datang');
            }else if (auth()->user()->jabatan == 'karyawan') {
                return redirect('karyawan/home')->withSuccess('Login Berhasil Selamat datang');
            }else if(auth()->user()->jabatan == 'direktur'){
                return redirect('direktur/home')->withSuccess('Login Berhasil Selamat datang');
            }
            return redirect('/')->with('errors', 'username atau password salah');
        }

        return redirect('/')->with('errors', 'username atau password salah');



    }

    public function logout(){
        Auth::logout();



        return redirect('/')->withSuccess('anda berhasil logout');
    }


}
