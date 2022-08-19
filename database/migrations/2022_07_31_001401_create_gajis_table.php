<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->double('total_gaji')->default(0);
            $table->double('gaji_pokok')->default(0);
            $table->double('uang_lembur')->default(0);
            $table->double('potongan')->default(0);
            $table->double('bonus')->default(0);
            $table->double('pot_asuransi')->default(0);
            $table->double('pot_sanksialpha')->default(0);
            $table->date('tgl_gaji');
            // $table->string('transportasi')->nullable();
            // $table->double('total')->nullable()->default(0);
            // $table->enum('status',['lunas','belum']);
            // $table->enum('acc',['sudah','belum']);
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
        Schema::dropIfExists('gajis');
    }
}
