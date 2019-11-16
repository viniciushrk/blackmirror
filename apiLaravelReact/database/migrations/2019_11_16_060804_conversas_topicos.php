<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConversasTopicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversas_topicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('resposta_a_conversa_id')->nullable();
            $table->unsignedBigInteger('id_users');
            $table->string('conversa');

            $table->foreign('resposta_a_conversa_id')->references('id')->on('conversas_topicos');
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
        Schema::dropIfExists('conversas_topicos');
    }
}
