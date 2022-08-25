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
            'password' => bcrypt('password'),
            'name' => 'ita rosita',
            'email' => 'itarosita5668@gmail.com',
            'foto' => 'karyawan.png',
            'jabatan' => 'karyawan',
            'gender' => 'perempuan',
            'alamat' => 'Jl. Puri Kartika Baru Rt/Rw: 3/6 Desa/Kel. Sudimara Selatan Kec. Ciledug Kota Tangerang',
            'nik' => '3671064506680004',
            'npwp' => '450734058416000',
            'no_hp' => '089554677584',
            'status' => 'kawin',
            'no_backup' => '0124215565',
            'waktu_aktif' => date('d/m/y'),
            'tgl_lahir' => '1990/05/10',
            'niy' => '108-02-30-005',
            'agama' => 'islam',
            'sk_pengangkatan' => '800/SK/YPDB/01/VII/2016',
            'ttl' => 'Jakarta, 05 Juni 1968',
            'pendidikan_terakhir' => 'S1 - Pendidikan Ekonomi',
            'nuptk' => '8937746648300082'
        ]);


        User::create([
            'no_identitas' => '222222222',
            'password' => bcrypt('password'),
            'name' => 'siti maemunah',
            'email' => 'sistem@gmail.com',
            'foto' => 'hrd.jpg',
            'jabatan' => 'hrd',
            'gender' => 'perempuan',
            'alamat' => 'Jl. H. Mas Mansyur Rt/Rw: 7/3 Desa/Kel. sudimara
            Pinang Kec. Pinang Kota Tangerang
            ',
            'nik' => '3671114505900001',
            'npwp' => '468913132416000',
            'no_hp' => '089554677584',
            'status' => 'kawin',
            'no_backup' => '0124215565',
            'waktu_aktif' => date('d/m/y'),
            'tgl_lahir' => '1990/05/10',
            'niy' => '990305004',
            'agama' => 'islam',
            'sk_pengangkatan' => '015/SK/YP.DB/VII/2011',
            'ttl' => ':  Tangerang, 05 Mei 1990',
            'pendidikan_terakhir' => 'S1 - Ilmu Pengetahuan Alam (IPA)',
            'nuptk' => '1434759660210063'
        ]);

        User::create([
            'no_identitas' => '333333333',
            'password' => bcrypt('password'),
            'name' => 'Achmad Maryadi. ST',
            'email' => 'achmadmaryadi6@gmail.com',
            'foto' => 'direktur.jpg',
            'jabatan' => 'direktur',
            'gender' => 'pria',
            'alamat' => 'Jl. Bahagia 6 No 25 Rt/Rw: 2/3 Desa/Kel. Kreo Selatan Kec. Larangan Kota Tangerang',
            'nik' => '36711305057200001',
            'npwp' => '774502165416000',
            'no_hp' => '089554677584',
            'status' => 'kawin',
            'no_backup' => '0124215565',
            'waktu_aktif' => date('d/m/y'),
            'tgl_lahir' => '1990/05/10',
            'niy' => '990305004',
            'agama' => 'islam',
            'sk_pengangkatan' => '26/A/YP/VII/94',
            'ttl' => 'Jember, 05 Maret 1972',
            'pendidikan_terakhir' => 'S1 - Pendidikan Agama Islam',
            'nuptk' => ':  3637750653200012'
        ]);


























        // User::create([
        //     'no_identitas' => '111111111',
        //     'password' => bcrypt('karyawan'),
        //     'name' => 'karyawan aman',
        //     'email' => 'rohid@gmail.com',
        //     'foto' => 'karyawan.png',
        //     'jabatan' => 'karyawan',
        //     'gender' => 'pria',
        //     'alamat' => 'ini diisi dengan alamat',
        //     'nik' => '1235567',
        //     'npwp' => '993777',
        //     'no_hp' => '089554677584',
        //     'status' => 'kawin',
        //     'no_backup' => '0124215565',
        //     'waktu_aktif' => date('d/m/y'),
        //     'tgl_lahir' => '1990/05/10'
        // ]);

        // User::create([
        //     'no_identitas' => '222222222',
        //     'password' => bcrypt('hrd'),
        //     'name' => 'hrd',
        //     'email' => 'hrd@gmail.com',
        //     'foto' => 'hrd.jpg',
        //     'jabatan' => 'hrd',
        //     'gender' => 'perempuan',
        //     'alamat' => 'ini diisi dengan alamat',
        //     'nik' => '234725983',
        //     'npwp' => '120487124',
        //     'no_hp' => '089575879342',
        //     'status' => 'kawin',
        //     'no_backup' => '0102359652',
        //     'waktu_aktif' => date('d/m/y'),
        //     'tgl_lahir' => '1990/05/10'
        // ]);

        // User::create([
        //     'no_identitas' => '333333333',
        //     'password' => bcrypt('direktur'),
        //     'name' => 'direktur',
        //     'email' => 'direk@gmail.com',
        //     'foto' => 'direktur.jpg',
        //     'jabatan' => 'direktur',
        //     'gender' => 'pria',
        //     'alamat' => 'ini diisi dengan alamat',
        //     'nik' => '987547512412',
        //     'npwp' => '024875981624',
        //     'no_hp' => '124980712874',
        //     'status' => 'kawin',
        //     'no_backup' => '2356753',
        //     'waktu_aktif' => date('d/m/y'),
        //     'tgl_lahir' => '1990/05/10'
        // ]);

        // User::create([
        //     'no_identitas' => '444444444',
        //     'password' => bcrypt('karyawan'),
        //     'name' => 'sumasih',
        //     'email' => 'djsfhn@gmail.com',
        //     'foto' => 'karyawan.png',
        //     'jabatan' => 'karyawan',
        //     'gender' => 'pria',
        //     'alamat' => 'ini diisi dengan alamat',
        //     'nik' => '348996123',
        //     'npwp' => '01986544213',
        //     'no_hp' => '12495454234',
        //     'status' => 'kawin',
        //     'no_backup' => '234234',
        //     'waktu_aktif' => date('d/m/y'),
        //     'tgl_lahir' => '1990/05/10'
        // ]);

    }
}
