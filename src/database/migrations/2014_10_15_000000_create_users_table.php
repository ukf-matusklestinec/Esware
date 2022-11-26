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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // udaje ktore si prida v profile
            $table->string('tel_cislo')->nullable();
            $table->date('datum_narodenia')->nullable();
            $table->boolean('pohlavie')->nullable();
            $table->string('profil')->nullable();
            $table->string('katedra')->nullable();
            $table->string('odbor')->nullable();
            //adresa
            $table->string('Ulica')->nullable();
            $table->string('Mesto')->nullable();
            $table->integer('PSC')->nullable();
            //role
            $table->boolean('Admin')->nullable();
            $table->boolean('Veduci_pracoviska')->nullable();
            $table->boolean('Povereny_pracovnik')->nullable();
            $table->boolean('Zastupca_firmy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
