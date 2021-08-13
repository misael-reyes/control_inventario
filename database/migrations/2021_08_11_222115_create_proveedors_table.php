<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('num_telefono',10);
            $table->string('e_mail',50);
            $table->string('direccion_calle',50);
            $table->string('direccion_colonia',50);
            $table->integer('direccion_numero');
            $table->string('direccion_ciudad',50);
            $table->string('direccion_estado',50);
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
        Schema::dropIfExists('proveedors');
    }
}
