<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePonukyHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ponuky_has_Tags', function (Blueprint $table) {
            $table->integer('Ponuky_idPonuky');
            $table->integer('Tags_idTags');
            
            $table->primary(['Ponuky_idPonuky', 'Tags_idTags']);
            $table->foreign('Ponuky_idPonuky', 'fk_Ponuky_has_Tags_Ponuky1')->references('idPonuky')->on('Ponuky')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Tags_idTags', 'fk_Ponuky_has_Tags_Tags1')->references('idTags')->on('Tags')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ponuky_has_Tags');
    }
}
