<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('foto');
            $table->enum('jabatan', ['karyawan', 'direktur', 'hrd'])->default('karyawan');
            $table->enum('gender', ['perempuan', 'pria'])->default('pria');
            $table->text('alamat');
            $table->string('nik');
            $table->string('npwp');
            $table->string('no_hp');
            $table->enum('status',['kawin', 'belum_kawin'])->default('belum_kawin');
            $table->string('no_backup');
            // $table->string('waktu_aktif');
            $table->date('waktu_aktif');
            $table->enum('status_pekerjaan',['masuk', 'alpha','telat','sakit','cuti','pending','izin'])->nullable;
            $table->date('tgl_lahir');


            // $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
