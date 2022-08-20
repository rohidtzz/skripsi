<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJatahGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jatah_gajis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->double('Gaji_Pokok')->default(0);
            $table->double('Gaji_Hari')->default(0);
            $table->double('Gaji_Perjam')->default(0);
            $table->double('tj_kesehatan')->default(0);
            $table->double('tj_pangan')->default(0);
            $table->double('tj_jabatan')->default(0);
            $table->double('rekening')->default(0);
            $table->double('Lembur_Jam')->default(0);
            // $table->enum('status',['acc','belum']);
            $table->enum('status_karyawan',['daily','staff']);
            $table->date('tgl_gaji');

            // $table->double('uang_tambahan')->default(0);
            // $table->double('gaji_pokok')->default(0);
            // $table->double('uang_overtime')->default(0);
            // $table->double('pot_bpjs')->default(0);
            // $table->double('pot_uang_alpha')->default(0);
            // $table->date('tgl_gaji');
            // $table->string('transportasi')->nullable();
            // $table->double('total')->nullable()->default(0);
            // $table->enum('status',['lunas','belum']);
            // $table->string('jumlah_overtime')->nullable();
            // $table->enum('status_gaji',['staff','daily worker']);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jatah_gajis');
    }
}
