<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\DataUser;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataUser::create([
            'user_id' =>  1,
            'cv' => 'Ini_Cv.pdf',
            'ijazah' => 'Ini_Ijazah.pdf',
            'sertifikat' => 'Ini_Sertifikat.pdf',
            'ktp' => 'Ini_Ktp.pdf',
            'npwp' => 'Ini_Npwp.pdf',
        ]);

        DataUser::create([
            'user_id' =>  2,
            'cv' => 'Ini_Cv.pdf',
            'ijazah' => 'Ini_Ijazah.pdf',
            'sertifikat' => 'Ini_Sertifikat.pdf',
            'ktp' => 'Ini_Ktp.pdf',
            'npwp' => 'Ini_Npwp.pdf',
        ]);

        DataUser::create([
            'user_id' =>  3,
            'cv' => 'Ini_Cv.pdf',
            'ijazah' => 'Ini_Ijazah.pdf',
            'sertifikat' => 'Ini_Sertifikat.pdf',
            'ktp' => 'Ini_Ktp.pdf',
            'npwp' => 'Ini_Npwp.pdf',
        ]);

        DataUser::create([
            'user_id' =>  4,
            'cv' => 'Ini_Cv.pdf',
            'ijazah' => 'Ini_Ijazah.pdf',
            'sertifikat' => 'Ini_Sertifikat.pdf',
            'ktp' => 'Ini_Ktp.pdf',
            'npwp' => 'Ini_Npwp.pdf',
        ]);
    }
}
