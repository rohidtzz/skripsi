<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SettingJam;

class SettingJamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingJam::create([
            'user_id' => 2,
            'jam_masuk' => '09:00:00',
            'jam_keluar' => '17:00:00'

        ]);
    }
}
