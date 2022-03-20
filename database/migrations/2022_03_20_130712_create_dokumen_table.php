<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('jns_dokumen_id');
            $table->string('nm')->nullable();
            $table->string('deskripsi')->nullable();
            $table->integer('jml')->nullable();
            $table->string('file')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('jns_dokumen_id')->references('id')->on('jns_dokumen');
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
        Schema::dropIfExists('dokumen');
    }
}
