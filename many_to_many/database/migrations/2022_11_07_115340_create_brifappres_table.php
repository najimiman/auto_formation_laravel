<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brifappres', function (Blueprint $table) {
            $table->id();
           $table->bigInteger('idbrif')->unsigned();
           $table->bigInteger('idappre')->unsigned();
           $table->foreign('idbrif')->references('id')->on('brifs')->onDelete('cascade');
           $table->foreign('idappre')->references('id')->on('apprenents')->onDelete('cascade');
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
        Schema::dropIfExists('brifappres');
    }
};
