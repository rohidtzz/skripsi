<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\SettingJam;

class CekLoginLagi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $cek = Auth::check();

        if(!$cek) {
            return $next($request);

        }


        if (auth()->user()->jabatan == 'hrd') {
            return redirect('hrd/home');
        }else if (auth()->user()->jabatan == 'karyawan') {
            return redirect('karyawan/home');
        }else if(auth()->user()->jabatan == 'direktur'){
            return redirect('direktur/home');
        }

        return redirect('/');


    }
}
