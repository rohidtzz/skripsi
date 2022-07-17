<?php

namespace App\Imports;

// use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Models\User;


class UserImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new User([
            'no_identitas' => $row[1],
            'password' => bcrypt($row[2]),
            'name' => $row[3],
            'email' => $row[4],
            'jabatan' => $row[5],
            'gender' => $row[6],
            'alamat' => $row[7],
            'nik' => $row[8],
            'npwp' => $row[9],
            'no_hp' => $row[10],
            'status' => $row[11],
            'no_backup' => $row[12],
            'waktu_aktif' => date('Y/m/d'),
            'status_pekerjaan' => $row[14],
        ]);
    }
}
