<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\Carte;
use App\Models\Commune;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CarteStepForm extends Component
{
    public array $availableDateTimes = [];
    public $communes;
    public $commune_id;
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

    public $appointment_date;
    public $options;

    public $totalSteps = 5;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
        $this->communes = Commune::all()->pluck('name', 'id');
        $this->availableDateTimes = getAvailableDateTimes();
    }

    public function updated($propertyName, $propertyValue)
    {
        if ($propertyName == 'commune_id') {
            $this->availableDateTimes = getAvailableDateTimes($propertyValue);
        }
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
                'commune_id' => 'required',
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
        } elseif ($this->currentStep == 4) {
            $this->validate([
                'prenom_pere' => 'required',
                'nom_pere' => 'required',
                'prenom_mere' => 'required',
                'nom_mere' => 'required'
            ]);
        }
    }

    public function register()
    {
        $this->validate([
            'appointment_date' => 'required'
        ]);

        //try {
            DB::beginTransaction();
            $carte = Carte::query()->create([
                'commune_id' => $this->commune_id,
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

            $appointmentDate = explode(' ', $this->appointment_date);
            $times = explode('-', $appointmentDate[1]);
            Appointment::create([
                'title'      => "Carte d'identite nationale",
                'date'       => $appointmentDate[0],
                'start_time' => $times[0],
                'end_time'   => $times[1],
                'commune_id' => $this->commune_id,
                'owner_id' => $carte->id,
                'owner_type' => 'App\\Models\\Carte'
            ]);

            session()->flash('message', 'Votre demande a été effectué avec success, Veuillez patienter vous receverer un message de confirmation sur votre numero de téléphone !');
            return redirect()->to('/');
        //} catch (\Exception $e) {
        //}
    }

    public function setAppointmentDate()
    {

    }

    public function render()
    {
        return view('livewire.carte-step-form');
    }
}
