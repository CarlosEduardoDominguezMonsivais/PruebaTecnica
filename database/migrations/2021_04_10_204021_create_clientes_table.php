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
            $table->id('id');
            $table->string('Nombres',35);
            $table->String('Apellido_Paterno',30);
            $table->String('Apellido_Materno',30);
            $table->String('Telefono',10);
            $table->String('Correo',25);
            $table->date('Fecha_de_Nacimiento');


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
        Schema::dropIfExists('clientes');
    }
}
