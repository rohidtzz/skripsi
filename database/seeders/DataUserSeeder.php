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
            'cv' => 'ini cv.pdf',
            'ijazah' => 'ini ijazah.pdf',
            'sertifikat' => 'ini sertifikat.pdf',
            'ktp' => 'ini ktp.pdf',
            'npwp' => 'ini npwp.pdf',
        ]);

        DataUser::create([
            'user_id' =>  2,
            'cv' => 'ini cv.pdf',
            'ijazah' => 'ini ijazah.pdf',
            'sertifikat' => 'ini sertifikat.pdf',
            'ktp' => 'ini ktp.pdf',
            'npwp' => 'ini npwp.pdf',
        ]);

        DataUser::create([
            'user_id' =>  3,
            'cv' => 'ini cv.pdf',
            'ijazah' => 'ini ijazah.pdf',
            'sertifikat' => 'ini sertifikat.pdf',
            'ktp' => 'ini ktp.pdf',
            'npwp' => 'ini npwp.pdf',
        ]);

        DataUser::create([
            'user_id' =>  4,
            'cv' => 'ini cv.pdf',
            'ijazah' => 'ini ijazah.pdf',
            'sertifikat' => 'ini sertifikat.pdf',
            'ktp' => 'ini ktp.pdf',
            'npwp' => 'ini npwp.pdf',
        ]);
    }
}
