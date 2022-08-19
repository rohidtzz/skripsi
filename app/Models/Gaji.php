<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total_gaji','gaji_pokok','uang_lembur','potongan','bonus','pot_asuransi','pot_sanksialpha','tgl_gaji'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
}
