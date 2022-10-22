<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdborTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Odbor', function (Blueprint $table) {
            $table->integer('idOdbor')->primary()->unique();
            $table->string('Nazov', 45)->unique('Nazov_UNIQUE');
            $table->integer('Katedra_idKatedra');
            
            $table->foreign('Katedra_idKatedra', 'fk_Odbor_Katedra1')->references('idKatedra')->on('Katedra')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Odbor');
    }
}
