<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tanggal', 'keterangan', 'jam_masuk', 'jam_keluar'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    public function getuser()
    {
        return $this->belongsTo(User::class,'id');
    }

    public function namu()
    {
        return $this->belongsTo(User::class,'id');
    }

    public function namuu(){
        return $this->name()->select('id','name');
    }

    public function wali()
    {
        return $this->hasOne(User::class,'id');
    }





    // public function getuser()
    // {
    //     return $this->hasMany(User::class,'id' );
    // }



    protected $table = 'absens';


}
