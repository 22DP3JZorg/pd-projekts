<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kursses', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->text('apraksts');
            $table->string('banera_adrese');
            $table->integer('cilveku_skaits')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kursses');
    }
};
