<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiFormatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_formats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['debit', 'credit', 'duration', 'income', 'identifier', 'overtime', 'text']);
            $table->boolean('readonly')->default(false);
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
        Schema::dropIfExists('gaji_formats');
    }
}
