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
            'keterangan' => 'Dinas',
            'alasan' => 'pengen liburan om cape',
            'tanggal' => date('Y/m/d'),
            'jam_mulai' => date('H:i:s'),
            'jam_selesai' => date('H:i:s'),
            'mulai' => date('Y/m/d'),
            'selesai' => date('Y/m/d'),
            'status' => 'pending',
            'jam_lembur' => 1
        ]);

        Pengajuan::create([
            'user_id' =>  1,
            'keterangan' => 'lembur',
            'alasan' => 'bolehlah',
            'tanggal' => date('Y/m/d'),
            'jam_mulai' => '01:00:00',
            'jam_selesai' => date('02:00:00'),
            'mulai' => date('Y/m/d'),
            'selesai' => date('Y/m/d'),
            'status' => 'pending',
            'jam_lembur' => 2
        ]);

    }
}
