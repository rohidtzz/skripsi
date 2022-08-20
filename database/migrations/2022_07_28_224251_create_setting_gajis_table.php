<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_gajis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_potongan');
            $table->string('jumlah_potongan');
            // $table->String('potongan_asuransi')->nullable();
            // $table->String('potongan_pph');
            // $table->String('potongan_sanksi_alpha')->nullable();
            // $table->String('potongan_lainnnya')->nullable();

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
        Schema::dropIfExists('setting_gajis');
    }
}
