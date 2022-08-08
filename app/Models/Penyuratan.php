<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuratan extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id','to_user_id','alpha','deskripsi', 'tanggal'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
