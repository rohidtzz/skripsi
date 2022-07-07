<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Absen;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absen::create([
            'user_id' => 1,
            'keterangan' => 'masuk',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'izin',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:15:00',
            'jam_keluar' => '16:40:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'alpha',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'telat',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'sakit',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'masuk',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'izin',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:15:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'alpha',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'telat',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'sakit',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'masuk',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:15:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'alpha',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'telat',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'sakit',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'izin',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:15:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'alpha',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'telat',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'sakit',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'masuk',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:15:00',
            'jam_keluar' => '16:45:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'alpha',
            'tanggal' => date('y/m/d'),
            'jam_masuk' => '09:10:00',
            'jam_keluar' => '16:45:00'
        ]);


    }
}
