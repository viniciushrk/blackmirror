<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DislikesConversas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dislikes_conversas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_conversas');
            $table->unsignedBigInteger('id_users');

            $table->foreign('id_conversas')->references('id')->on('conversas_topicos');
            $table->foreign('id_users')->references('id')->on('users');
            
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
        Schema::dropIfExists('dislikes_conversas');
    }
}
