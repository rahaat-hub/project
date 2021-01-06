<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('f_name',100);
            $table->string('m_name',100);
            $table->bigInteger('nid');
            $table->date('birthDate');
            $table->string('gender');
            $table->string('email',100);
            $table->string('password',20);
            $table->string('blood_group',10);
            $table->text('address');
            $table->string('phoneNumber',25);
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
        Schema::dropIfExists('children');
    }
}
