<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildVaccinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_vaccins', function (Blueprint $table) {
            $table->id();
            $table->integer('child_id');
            $table->integer('vaccine_id');
            $table->integer('dose_no');
            $table->dateTime('first_dose')->nullable();
            $table->dateTime('second_dose')->nullable();
            $table->dateTime('third_dose')->nullable();
            
            
            
        
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
        Schema::dropIfExists('child_vaccins');
    }
}