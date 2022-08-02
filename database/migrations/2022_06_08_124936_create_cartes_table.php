<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
            $table->string('commmune');
            $table->string('commissariat');
            $table->string('type_demande');
            $table->string('priorite');
            $table->date('date_paiement');
            $table->string('prenom');
            $table->string('nom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('sexe');
            $table->string('nationalite_origine');
            $table->string('statut_nationalite');
            $table->string('profession');
            $table->string('domicile');
            $table->string('situation_matrimoniale');
            $table->string('taille');
            $table->string('teint');
            $table->string('signe_particuliere')->nullable();
            $table->string('couleur_cheveux');
            $table->string('prenom_pere');
            $table->string('nom_pere');
            $table->string('prenom_mere');
            $table->string('nom_mere');
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
        Schema::dropIfExists('cartes');
    }
}
