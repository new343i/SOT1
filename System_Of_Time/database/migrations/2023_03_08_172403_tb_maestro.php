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
        Schema::create('tb_maestro', function (Blueprint $table) {
            $table->string('N_maestro');
            $table->integer('Num_maestro');
            $table->string('Area_maestro');
            $table->string('Tutorado');
            $table->string('Clave_materia');
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
        Schema::dropIfExists('tb_maestro');
    }
};
