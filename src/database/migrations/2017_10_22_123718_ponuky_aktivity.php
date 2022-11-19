<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('aktivities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prihlasenie_id')->constrained()->onDelete('cascade');
            $table->integer('pocet_hodin');
            $table->boolean('homeoffice');
            $table->string('_token');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aktivities');
    }
};
