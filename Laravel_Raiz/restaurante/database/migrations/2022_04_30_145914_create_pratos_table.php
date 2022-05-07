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
        Schema::create('pratos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 50);
            $table->string('nome', 50); 
            $table->decimal('preco', 12,2);
            $table->timestamps();
            $table->bigInteger('restaurante_id')->unsigned();
            $table->foreign('restaurante_id')->references('id')->on('restaurantes'); //para fazer referencias as chaves estrangeiras.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pratos');
    }
};
