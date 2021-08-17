<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llantas', function (Blueprint $table) {
            $table->id();

            $table->string('medida', 10);
            $table->integer('mspn');
            $table->string('gama', 30);
            $table->string('descripcion', 100);
            $table->string('ic_rv', 15);
            $table->string('tecnologia', 10)->nullable();
            $table->string('marcaje_oe', 10)->nullable();
            $table->string('vehiculo_equi_orig', 100)->nullable();
            $table->integer('precio_v');
            $table->integer('precio_c');
            $table->integer('descuento');
            $table->integer('stock');

            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->foreign('vehiculo_id')
                ->references('id')
                ->on('vehiculos')
                ->onDelete('set null');

            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')
                ->references('id')
                ->on('marcas')
                ->onDelete('set null');

            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
                ->onDelete('set null');

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
        Schema::dropIfExists('llantas');
    }
}
