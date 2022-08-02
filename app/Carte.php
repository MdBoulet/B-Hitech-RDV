<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $fillable = [
        'type_demande',
        'priorite',
        'date_paiement',
        'prenom',
        'nom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'nationalite_origine',
        'statut_nationalite',
        'profession',
        'domicile',
        'situation_matrimoniale',
        'taille',
        'teint',
        'signe_particuliere',
        'couleur_cheveux',
        'prenom_pere',
        'nom_pere',
        'prenom_mere',
        'nom_mere'
    ];
}
