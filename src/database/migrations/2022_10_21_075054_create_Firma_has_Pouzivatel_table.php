<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmaHasPouzivatelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Firma_has_Pouzivatel', function (Blueprint $table) {
            $table->integer('Firma_idFirma');
            $table->integer('Pouzivatel_idPouzivatel');
            
            $table->primary(['Firma_idFirma', 'Pouzivatel_idPouzivatel']);
            $table->foreign('Firma_idFirma', 'fk_Firma_has_Pouzivatel_Firma1')->references('idFirma')->on('Firma')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Pouzivatel_idPouzivatel', 'fk_Firma_has_Pouzivatel_Pouzivatel1')->references('idPouzivatel')->on('Pouzivatel')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Firma_has_Pouzivatel');
    }
}
