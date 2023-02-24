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
            $table->string('type')->comment('Тип квартиры');
            $table->integer('number')->comment('Номер квартиры');
            $table->float('price', 9, 2)->comment('Цена квартиры');
            $table->float('price_metr', 9, 2)->comment('Цена метра');
            $table->float('area')->comment('Площадь квартиры');
            $table->float('area_live')->comment('Площадь квартиры жилая');
            $table->integer('flor')->comment('Этаж');
            $table->integer('rooms')->comment('Комнат');
            $table->string('view')->nullable()->comment('Вид из ококн');
            $table->string('podezd')->nullable()->comment('Подезд');
            $table->string('plan_img')->nullable()->comment('План квартиры');
            $table->string('home_1_img')->nullable()->comment('Фото дома 1');
            $table->string('home_2_img')->nullable()->comment('Фото дома 2');
            $table->string('koridor_img')->nullable()->comment('Фото коридора');

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
