<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatedraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Katedra', function (Blueprint $table) {
            $table->integer('idKatedra')->primary()->unique();
            $table->string('Nazov', 45)->unique('Nazov_UNIQUE');
            $table->integer('Fakulta_idFakulta');
            
            $table->foreign('Fakulta_idFakulta', 'fk_Katedra_Fakulta')->references('idFakulta')->on('Fakulta')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Katedra');
    }
}
