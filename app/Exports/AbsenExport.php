<?php

namespace App\Exports;

Use App\Models\Absen;

use Maatwebsite\Excel\Concerns\FromCollection;

class AbsenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Absen::all();
    }
}
