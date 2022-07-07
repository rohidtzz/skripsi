<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Posisi;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posisi::create([
            'user_id' => 1,
            'name' => 'staff it',
        ]);

        Posisi::create([
            'user_id' => 2,
            'name' => 'personalita',
        ]);

        Posisi::create([
            'user_id' => 3,
            'name' => 'ceo',
        ]);

        Posisi::create([
            'user_id' => 4,
            'name' => 'security',
        ]);
    }
}
