<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            
                $table->id();
                $table->string('nombre');
                $table->string('slug');
                $table->string('email');
                $table->string('telefono');
                $table->string('direccion');
                $table->timestamps();
                $table->unsignedInteger('id_v');
        });

        Schema::table('clientes',function (Blueprint $table){
            $table->foreign('id_v')->references('id')->on('ventas');           
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
