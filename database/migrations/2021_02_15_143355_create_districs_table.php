<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 6);
            $table->string('distric', 50);

            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('departament_id');

            $table->foreign('departament_id')->references('id')->on('departaments');
            $table->foreign('province_id')->references('id')->on('provinces');

            

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
        Schema::dropIfExists('districs');
    }
}
