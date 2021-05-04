<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('phone',50);
            $table->string('blood_group',50);
<<<<<<< HEAD
            $table->string('gender',20);
=======
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
            $table->string('role',30)->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
