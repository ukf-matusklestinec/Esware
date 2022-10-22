<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Firma', function (Blueprint $table) {
            $table->integer('idFirma')->primary()->unique();
            $table->string('Nazov', 45);
            $table->string('ISIN', 45);
            $table->string('Webstranka', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Firma');
    }
}
