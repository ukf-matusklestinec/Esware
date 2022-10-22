<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aktivita', function (Blueprint $table) {
            $table->integer('idAktivita')->primary()->unique();
            $table->time('Cas_od', 1);
            $table->time('Cas_do', 1);
            $table->date('Datum');
            $table->tinyInteger('Home_office');
            $table->integer('Student_idStudent');
            $table->integer('Ponuky_idPonuky');
            
            $table->foreign('Ponuky_idPonuky', 'fk_Aktivita_Ponuky1')->references('idPonuky')->on('Ponuky')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Student_idStudent', 'fk_Aktivita_Student1')->references('idStudent')->on('Student')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aktivita');
    }
}
