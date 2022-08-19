<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JatahGaji extends Model
{

    protected $fillable = [
        'user_id', 'Gaji_Hari', 'Gaji_Perjam','Gaji_Pokok', 'tj_kesehatan','tj_pangan','tj_jabatan','rekening','Lembur_Jam','status','tgl_gaji','status_karyawan'
    ];

    use HasFactory;
}
