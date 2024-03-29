<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatinetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patinetes', function (Blueprint $table) {
            $table->primary('id_patinete')->unsigned();
            $table->string('marca');
            $table->string('modelo');
            $table->string('estado');
            $table->string('velocidad');
            $table->time('tiempo_uso');
            $table->timestamps();
            $table->primary('id_patinetes')
            ->references('id_patinete')
            ->on($tableNames['administrador'])
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patinetes');
    }
}
