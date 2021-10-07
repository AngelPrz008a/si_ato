<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_nota', function (Blueprint $table) {
            $table->id();
            $table->index('id_user');
            $table->index('id_nota');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_nota')->references('id')->on('nota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_nota');
    }
}
