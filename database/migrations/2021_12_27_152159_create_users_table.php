<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique()->nullable();
            $table->timestamp('nis_verified_at')->nullable();
            $table->string('name');
            $table->string('rombel')->nullable();
            $table->string('rayon')->nullable();
            $table->enum('role', ['admin','student'])->default('student');
            $table->string('password');
            $table->string('image')->nullable()->default('profile.png');
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
        Schema::dropIfExists('users');
    }
}
