<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adresa', function (Blueprint $table) {
            $table->integer('idAdresa')->primary()->unique();
            $table->integer('PSC');
            $table->string('Ulica', 45);
            $table->integer('Cislo');
            $table->string('Mesto', 45);
            $table->string('Krajina', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adresa');
    }
}
