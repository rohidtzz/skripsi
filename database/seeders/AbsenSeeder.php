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
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'izin',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'alpha',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:11:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'telat',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:09:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 1,
            'keterangan' => 'sakit',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'masuk',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:08:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'izin',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'alpha',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:11:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'telat',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:08:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 4,
            'keterangan' => 'sakit',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:11:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'masuk',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'alpha',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:11:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'telat',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:08:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'sakit',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:11:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 2,
            'keterangan' => 'izin',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'alpha',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:11:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'telat',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:08:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'sakit',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '04:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'masuk',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:04:00',
            'jam_keluar' => '16:56:00'
        ]);

        Absen::create([
            'user_id' => 3,
            'keterangan' => 'alpha',
            'tanggal' => '2022/08/06',
            'jam_masuk' => '09:11:00',
            'jam_keluar' => '16:56:00'
        ]);


    }
}
