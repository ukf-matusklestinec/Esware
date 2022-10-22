<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePouzivatelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pouzivatel', function (Blueprint $table) {
            $table->integer('idPouzivatel')->primary()->unique();
            $table->string('Meno', 45);
            $table->string('Priezvisko', 45);
            $table->string('Email', 45)->unique('Email_UNIQUE');
            $table->date('Datum_narodenia');
            $table->string('Pohlavie', 45);
            $table->integer('Tel_cislo');
            $table->string('Heslo', 45);
            $table->tinyInteger('Administrator');
            $table->tinyInteger('Veduci_pracoviska');
            $table->tinyInteger('Povereny_pracovnik');
            $table->tinyInteger('Zastupca_firmy');
            $table->integer('Adresa_idAdresa');
            
            $table->foreign('Adresa_idAdresa', 'fk_Pouzivatel_Adresa2')->references('idAdresa')->on('Adresa')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pouzivatel');
    }
}
