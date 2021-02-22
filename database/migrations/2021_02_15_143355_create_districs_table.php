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
            $table->foreignId('province_id')->constrained();
            $table->foreignId('departament_id')->constrained();     
            $table->string('name', 60);         
            $table->timestamp('created_ad')->useCurrent();
            $table->timestamp('updated_ad')->useCurrent();  
           
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
