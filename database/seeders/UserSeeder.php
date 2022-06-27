<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'no_identitas' => '111111111',
            'password' => bcrypt('karyawan'),
            'name' => 'karyawan',
            'email' => 'rohid@gmail.com',
            'jabatan' => 'karyawan',
            'gender' => 'pria',
            'alamat' => 'ini diisi dengan alamat',
            'nik' => '1235567',
            'npwp' => '993777',
            'no_hp' => '089554677584',
            'status' => 'kawin',
            'no_backup' => '0124215565',
            'waktu_aktif' => date('d/m/y'),
        ]);

        User::create([
            'no_identitas' => '222222222',
            'password' => bcrypt('hrd'),
            'name' => 'hrd',
            'email' => 'hrd@gmail.com',
            'jabatan' => 'hrd',
            'gender' => 'perempuan',
            'alamat' => 'ini diisi dengan alamat',
            'nik' => '234725983',
            'npwp' => '120487124',
            'no_hp' => '089575879342',
            'status' => 'kawin',
            'no_backup' => '0102359652',
            'waktu_aktif' => date('d/m/y'),
        ]);

        User::create([
            'no_identitas' => '333333333',
            'password' => bcrypt('direktur'),
            'name' => 'direktur',
            'email' => 'direk@gmail.com',
            'jabatan' => 'direktur',
            'gender' => 'pria',
            'alamat' => 'ini diisi dengan alamat',
            'nik' => '987547512412',
            'npwp' => '024875981624',
            'no_hp' => '124980712874',
            'status' => 'kawin',
            'no_backup' => '2356753',
            'waktu_aktif' => date('d/m/y'),
        ]);

    }
}
