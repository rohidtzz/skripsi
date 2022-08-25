<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\JatahGaji;

class JatahGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JatahGaji::create([
            'User_id' => 1,
            'tj_kesehatan' => '80000',
            'tj_pangan' => '30000',
            'tj_jabatan' => '0',
            'rekening' => 3456789011,
            'Gaji_Pokok' => '2500000',
            'Gaji_Perjam' => '10000',
            'Gaji_Hari' => '100000',
            'Lembur_Jam' => '20000',
            'status_karyawan' => 'daily',
            'tgl_gaji' => date('Y-m-d')
        ]);

        JatahGaji::create([
            'User_id' => 2,
            'tj_kesehatan' => '80000',
            'tj_pangan' => '30000',
            'tj_jabatan' => '0',
            'rekening' => 3456789022,
            'Gaji_Pokok' => '2500000',
            'Gaji_Perjam' => '10000',
            'Gaji_Hari' => '100000',
            'Lembur_Jam' => '10000',
            'status_karyawan' => 'staff',
            'tgl_gaji' => date('Y-m-d')
        ]);

        JatahGaji::create([
            'User_id' => 3,
            'tj_kesehatan' => '80000',
            'tj_pangan' => '30000',
            'tj_jabatan' => '0',
            'rekening' => 3456789033,
            'Gaji_Pokok' => '2500000',
            'Gaji_Perjam' => '10000',
            'Gaji_Hari' => '10000',
            'Lembur_Jam' => '0',
            'status_karyawan' => 'staff',
            'tgl_gaji' => date('Y-m-d')
        ]);

        // JatahGaji::create([
        //     'User_id' => 4,
        //     'tj_kesehatan' => '80000',
        //     'tj_pangan' => '30000',
        //     'tj_jabatan' => '0',
        //     'rekening' => 3456789044,
        //     'Gaji_Pokok' => '2500000',
        //     'Gaji_Perjam' => '10000',
        //     'Gaji_Hari' => '100000',
        //     'Lembur_Jam' => '10000',
        //     'status_karyawan' => 'daily',
        //     'tgl_gaji' => date('Y-m-d')
        // ]);
    }
}
