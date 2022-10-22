<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->integer('idStudent')->primary()->unique();
            $table->string('Meno', 45);
            $table->string('Priezvisko', 45);
            $table->string('Email', 45)->unique('Email_UNIQUE');
            $table->date('Datum_narodenia');
            $table->string('Pohlavie', 45);
            $table->integer('Tel_cislo');
            $table->string('Heslo', 45);
            $table->integer('Adresa_idAdresa');
            $table->integer('Odbor_idOdbor');
            
            $table->foreign('Adresa_idAdresa', 'fk_Pouzivatel_Adresa1')->references('idAdresa')->on('Adresa')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Odbor_idOdbor', 'fk_Pouzivatel_Odbor1')->references('idOdbor')->on('Odbor')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Student');
    }
}
