<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'uang_tambahan', 'gaji_pokok','uang_overtime','pot_bpjs','tgl_gaji','transportasi','pot_uang_alpha','total','status','jumlah_overtime','status_gaji'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
