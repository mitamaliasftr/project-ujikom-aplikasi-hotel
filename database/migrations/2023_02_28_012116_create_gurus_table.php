<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nip', 20);
            $table->string('jenisKelamin', 1);
            $table->string('tempatLahir', 50);
            $table->date('tanggalLahir', 50);
            $table->string('nik', 20);
            $table->string('agama', 20);
            $table->string('alamat', 20);
            $table->integer('isActive');
            $table->integer('isDelete');
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
        Schema::dropIfExists('guru');
    }
};
