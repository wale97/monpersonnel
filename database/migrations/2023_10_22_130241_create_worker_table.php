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
        Schema::create('worker', function (Blueprint $table) {
            $table->increments('id_worker');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->integer('telephone')->unique();
            $table->longtext('email')->unique();
            $table->string('poste');
            $table->string('experience');
            $table->string('conditions');
            $table->string('prise_en_charge');
            $table->string('logement');
            $table->integer('paie');
            $table->string('debut');
            $table->string('identite')->unique();
            $table->string('casier')->unique();
            $table->string('photo')->unique();
            $table->string('ville');
            $table->string('quartier');
            $table->float('rating');
            $table->boolean('is_recruted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker');
    }
};
