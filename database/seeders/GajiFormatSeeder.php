<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GajiFormat;

class GajiFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GajiFormat::create([
            'name' => 'ID',
            'type' => 'identifier',
        ]);
        GajiFormat::create([
            'name' => 'Name',
            'type' => 'identifier',
        ]);
        GajiFormat::create([
            'name' => 'Jabatan',
            'type' => 'identifier',
        ]);
        GajiFormat::create([
            'name' => 'Total Jam Kerja /bln',
            'type' => 'duration',
            'readonly' => true,
        ]);
        GajiFormat::create([
            'name' => 'Gaji /jam',
            'type' => 'income',
            'readonly' => true,
        ]);
        GajiFormat::create([
            'name' => 'Lembur',
            'type' => 'overtime',
            'readonly' => true,
        ]);
        GajiFormat::create([
            'name' => 'Tunjangan Kesehatan',
            'type' => 'debit',
        ]);
        GajiFormat::create([
            'name' => 'Tunjangan Pangan',
            'type' => 'debit',
        ]);
        GajiFormat::create([
            'name' => 'Tunjangan Jabatan',
            'type' => 'debit',
        ]);
        GajiFormat::create([
            'name' => 'Pph',
            'type' => 'credit',
        ]);
        GajiFormat::create([
            'name' => 'NPWP',
            'type' => 'identifier',
        ]);
        GajiFormat::create([
            'name' => 'Rekening',
            'type' => 'identifier',
        ]);
    }
}
