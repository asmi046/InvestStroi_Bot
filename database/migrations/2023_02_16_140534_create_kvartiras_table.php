<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kvartiras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('home')->comment('Дом');
            $table->integer('number')->comment('Номер квартиры');
            $table->float('area')->comment('Площадь квартиры');
            $table->float('area_live')->comment('Площадь квартиры жилая');
            $table->integer('flor')->comment('Этаж');
            $table->integer('rooms')->comment('Комнат');
            $table->foreignId('home_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kvartiras');
    }
};
