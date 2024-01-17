<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->string('nom');
            $table->string('prenom');
            $table->string('age');
            $table->integer('telephone')->unique();
            $table->longtext('email')->unique();
            $table->longtext('password');
            $table->longtext('cpassword');
            $table->string('poste');
            $table->string('conditions');
            $table->string('prise_en_charge');
            $table->string('logement');
            $table->integer('budget');
            $table->string('debut');
            $table->string('identite')->unique();
            $table->string('photo')->unique();
            $table->string('ville');
            $table->string('quartier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
