<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actes', function (Blueprint $table) {
            $table->id();
            $table->string('annee');
            $table->string('jugement');
            $table->string('num_acte');
            $table->string('feuillet');
            $table->string('prenom');
            $table->string('nom');
            $table->date('date_naissance');
            $table->time('heure_naissance');
            $table->string('lieu_naissance');
            $table->string('quartier');
            $table->string('secteur');
            $table->string('sexe');
            $table->string('rang_naissance');
            $table->string('prenom_pere');
            $table->string('nom_pere');
            $table->date('date_naissance_pere');
            $table->string('lieu_naissance_pere');
            $table->string('profession_pere');
            $table->string('contact_pere');
            $table->string('domicile_pere');
            $table->string('prenom_mere');
            $table->string('nom_mere');
            $table->date('date_naissance_mere');
            $table->string('lieu_naissance_mere');
            $table->string('profession_mere');
            $table->string('contact_mere');
            $table->string('domicile_mere');
            $table->string('prenom_declarant');
            $table->string('nom_declarant');
            $table->date('date_naissance_declarant');
            $table->string('lieu_naissance_declarant');
            $table->string('lien_parente');
            $table->string('contact_declarant');
            $table->string('domicile_declarant');
            $table->unsignedInteger('commune_id');
            $table->foreign('commune_id')->references('id')->on('communes');
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
        Schema::dropIfExists('actes');
    }
}
