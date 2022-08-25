<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'no_identitas',
        'password',
        'name',
        'email',
        'foto',
        'jabatan',
        'gender',
        'alamat',
        'nik',
        'npwp',
        'no_hp',
        'status',
        'no_backup',
        'waktu_aktif',
        'tgl_lahir',
        'ttl',
        'agama',
        'niy',
        'sk_pengangkatan',
        'pendidikan_terakhir',
        'nuptk'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // public function getabsn()
    // {
    //     return $this->hasMany(Absen::class,'user_id' );
    // }

    public function getabsen()
    {
        return $this->hasMany(Absen::class,'user_id');
    }

    public function getpengajuan()
    {
        return $this->hasMany(Pengajuan::class,'user_id');
    }

    public function getjatahgaji()
    {
        return $this->hasMany(JatahGaji::class,'user_id');
    }

    public function getam()
    {
        return $this->hasOne(Absen::class,'user_id');
    }



    public function getmasuk()
    {
        return $this->hasMany(Absen::class,'keterangan');
    }

    protected $table = 'users';





}
