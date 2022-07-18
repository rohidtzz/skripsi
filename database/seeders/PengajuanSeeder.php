<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pengajuan;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pengajuan::create([
            'user_id' =>  1,
            'keterangan' => 'cuti',
            'alasan' => 'pengen liburan om cape',
            'tanggal' => date('Y/m/d'),
            'mulai' => date('Y/m/d'),
            'selesai' => date('Y/m/d'),
            'status' => 'pending'
        ]);

    }
}
