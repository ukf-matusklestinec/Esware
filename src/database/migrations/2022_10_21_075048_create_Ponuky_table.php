<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePonukyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ponuky', function (Blueprint $table) {
            $table->integer('idPonuky')->primary()->unique();
            $table->string('Nazov', 45);
            $table->text('Napln_prace');
            $table->text('Ostatne_info');
            $table->string('Email', 45);
            $table->integer('Tel_cislo');
            $table->string('Strucna_charakteristika_spolocnosti')->nullable();
            $table->dateTime('Datum_pridania', 1);
            $table->tinyInteger('Aktivna');
            $table->tinyInteger('Schvalena');
            $table->integer('Firma_idFirma');
            $table->integer('Adresa_idAdresa');
            $table->integer('Pouzivatel_idPouzivatel');
            
            $table->foreign('Adresa_idAdresa', 'fk_Ponuky_Adresa1')->references('idAdresa')->on('Adresa')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Firma_idFirma', 'fk_Ponuky_Firma1')->references('idFirma')->on('Firma')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Pouzivatel_idPouzivatel', 'fk_Ponuky_Pouzivatel1')->references('idPouzivatel')->on('Pouzivatel')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ponuky');
    }
}
