<?php

namespace App\Http\Livewire;

use App\Carte;
use Livewire\Component;

class CarteStepForm extends Component
{
    public $commune;
    public $commissariat;

    public $type_demande;
    public $priorite;
    public $date_paiement;

    public $prenom;
    public $nom;
    public $date_naissance;
    public $lieu_naissance;
    public $sexe;
    public $nationalite_origine;
    public $statut_nationalite;
    public $profession;
    public $domicile;
    public $situation_matrimoniale;

    public $taille;
    public $teint;
    public $signe_particuliere;
    public $couleur_cheveux;

    public $prenom_pere;
    public $nom_pere;
    public $prenom_mere;
    public $nom_mere;

    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function decrement()
    {
        $this->currentStep--;
        if($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function increment()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function validateData()
    {
        if($this->currentStep == 1) {
            $this->validate([
                'type_demande' => 'required',
                'priorite' => 'required',
                'date_paiement' => 'required'
            ]);
        }
        elseif($this->currentStep == 2) {
            $this->validate([
                'prenom' => 'required',
                'nom' => 'required',
                'date_naissance' => 'required',
                'lieu_naissance' => 'required',
                'sexe' => 'required',
                'nationalite_origine' => 'required',
                'statut_nationalite' => 'required',
                'profession' => 'required',
                'domicile' => 'required',
                'situation_matrimoniale' => 'required'
            ]);
        }
        elseif($this->currentStep == 3) {
            $this->validate([
                'taille' => 'required',
                'teint' => 'required',
                'couleur_cheveux' => 'required'
            ]);
        }
    }

    public function register()
    {
        $this->validate([
            'prenom_pere' => 'required',
            'nom_pere' => 'required',
            'prenom_mere' => 'required',
            'nom_mere' => 'required'
        ]);

        Carte::create([
            'type_demande' => $this->type_demande,
            'priorite' => $this->priorite,
            'date_paiement' => $this->date_paiement,
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'date_naissance' => $this->date_naissance,
            'lieu_naissance' => $this->lieu_naissance,
            'sexe' => $this->sexe,
            'nationalite_origine' => $this->nationalite_origine,
            'statut_nationalite' => $this->statut_nationalite,
            'profession' => $this->profession,
            'domicile' => $this->domicile,
            'situation_matrimoniale' => $this->situation_matrimoniale,
            'taille' => $this->taille,
            'teint' => $this->teint,
            'couleur_cheveux' => $this->couleur_cheveux,
            'prenom_pere' => $this->prenom_pere,
            'nom_pere' => $this->nom_pere,
            'prenom_mere' => $this->prenom_mere,
            'nom_mere' => $this->nom_mere
        ]);

        session()->flash('message', 'Votre demande a été effectué avec success, Veuillez patienter vous receverer un message de confirmation sur votre numero de téléphone !');
        
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.carte-step-form');
    }
}
