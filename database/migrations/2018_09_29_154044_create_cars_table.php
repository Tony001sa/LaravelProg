<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) { //Таблица cars. Ларавел отказался выполнять запрос, если нет значений по-умолчанию. 
            $table->increments('id');
            $table->string('name')->default('отсутствует');
            $table->string('model')->default('отсутствует');
            $table->string('reg')->default('отсутствует');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
