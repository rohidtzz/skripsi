<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SettingGaji;

class SettingGajiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SettingGaji::create([
            'jenis_potongan' => 'potongan_asuransi',
            'jumlah_potongan' => '100000',
        ]);

        SettingGaji::create([
            'jenis_potongan' => 'potongan pph',
            'jumlah_potongan' => '50000',
        ]);

        SettingGaji::create([
            'jenis_potongan' => 'potongan sanksi alpha',
            'jumlah_potongan' => '100000',
        ]);

        SettingGaji::create([
            'jenis_potongan' => 'Gaji Pokok',
            'jumlah_potongan' => '3000000',
        ]);

        SettingGaji::create([
            'jenis_potongan' => 'hadir',
            'jumlah_potongan' => '100000',
        ]);



        // SettingGaji::create([
        //     'jenis_potongan' => 'potongan lainnnya',
        //     'jumlah_potongan' => '',
        // ]);

    }
}
