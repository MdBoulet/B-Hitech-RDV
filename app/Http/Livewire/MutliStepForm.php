<?php

namespace App\Http\Livewire;

use App\Models\Acte;
use App\Models\Appointment;
use App\Models\Commune;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MutliStepForm extends Component
{
    public array $availableDateTimes = [];
    public $communes;
    public $commune_id;

    public $annee;
    public $jugement;
    public $num_acte;
    public $feuillet;

    public $prenom;
    public $nom;
    public $date_naissance;
    public $heure_naissance;
    public $lieu_naissance;
    public $quartier;
    public $secteur;
    public $sexe;
    public $rang_naissance;

    public $prenom_pere;
    public $nom_pere;
    public $date_naissance_pere;
    public $lieu_naissance_pere;
    public $profession_pere;
    public $contact_pere;
    public $domicile_pere;

    public $prenom_mere;
    public $nom_mere;
    public $date_naissance_mere;
    public $lieu_naissance_mere;
    public $profession_mere;
    public $contact_mere;
    public $domicile_mere;

    public $prenom_declarant;
    public $nom_declarant;
    public $date_naissance_declarant;
    public $lieu_naissance_declarant;
    public $lien_parente;
    public $contact_declarant;
    public $domicile_declarant;

    public $appointment_date;
    public $options;

    public $totalSteps = 6;
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

    public function render()
    {
        return view('livewire.mutli-step-form');
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
                'annee' => 'required',
                'jugement' => 'required',
                'num_acte' => 'required',
                'feuillet' => 'required',
            ]);
        }
        elseif($this->currentStep == 2) {
            $this->validate([
                'prenom' => 'required',
                'nom' => 'required',
                'date_naissance' => 'required',
                'heure_naissance' => 'required',
                'lieu_naissance' => 'required',
                'quartier' => 'required',
                'secteur' => 'required',
                'rang_naissance' => 'required'
            ]);
        }
        elseif($this->currentStep == 3) {
            $this->validate([
                'prenom_pere' => 'required',
                'nom_pere' => 'required',
                'date_naissance_pere' => 'required',
                'lieu_naissance_pere' => 'required',
                'profession_pere' => 'required',
                'contact_pere' => 'required',
                'domicile_pere' => 'required'
            ]);
        }
        elseif($this->currentStep == 4) {
            $this->validate([
                'prenom_mere' => 'required',
                'nom_mere' => 'required',
                'date_naissance_mere' => 'required',
                'lieu_naissance_mere' => 'required',
                'profession_mere' => 'required',
                'contact_mere' => 'required',
                'domicile_mere' => 'required'
            ]);
        } elseif ($this->currentStep == 5) {
            $this->validate([
                'prenom_declarant' => 'required',
                'nom_declarant' => 'required',
                'date_naissance_declarant' => 'required',
                'lieu_naissance_declarant' => 'required',
                'lien_parente' => 'required',
                'contact_declarant' => 'required',
                'domicile_declarant' => 'required'
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
            $acte = Acte::create([
                'commune_id' => $this->commune_id,
                'annee' => $this->annee,
                'jugement' => $this->jugement,
                'num_acte' => $this->num_acte,
                'feuillet' => $this->feuillet,
                'prenom' => $this->prenom,
                'nom' => $this->nom,
                'date_naissance' => $this->date_naissance,
                'heure_naissance' => $this->heure_naissance,
                'lieu_naissance' => $this->lieu_naissance,
                'quartier' => $this->quartier,
                'secteur' => $this->secteur,
                'sexe' => $this->sexe,
                'rang_naissance' => $this->rang_naissance,
                'prenom_pere' => $this->prenom_pere,
                'nom_pere' => $this->nom_pere,
                'date_naissance_pere' => $this->date_naissance_pere,
                'lieu_naissance_pere' => $this->lieu_naissance_pere,
                'profession_pere' => $this->profession_pere,
                'contact_pere' => $this->contact_pere,
                'domicile_pere' => $this->domicile_pere,
                'prenom_mere' => $this->prenom_mere,
                'nom_mere' => $this->nom_mere,
                'date_naissance_mere' => $this->date_naissance_mere,
                'lieu_naissance_mere' => $this->lieu_naissance_mere,
                'profession_mere' => $this->profession_mere,
                'contact_mere' => $this->contact_mere,
                'domicile_mere' => $this->domicile_mere,
                'prenom_declarant' => $this->prenom_declarant,
                'nom_declarant' => $this->nom_declarant,
                'date_naissance_declarant' => $this->date_naissance_declarant,
                'lieu_naissance_declarant' => $this->lieu_naissance_declarant,
                'lien_parente' => $this->lien_parente,
                'contact_declarant' => $this->contact_declarant,
                'domicile_declarant' => $this->domicile_declarant
            ]);

            $appointmentDate = explode(' ', $this->appointment_date);
            $times = explode('-', $appointmentDate[1]);
            Appointment::create([
                'title'      => 'Acte de Naissance',
                'date'       => $appointmentDate[0],
                'start_time' => $times[0],
                'end_time'   => $times[1],
                'commune_id' => $this->commune_id,
                'owner_id'   => $acte->id,
                'owner_type' => 'App\\Models\\Acte'
            ]);
            DB::commit();

            session()->flash('message', 'Votre demande a été effectué avec success, Veuillez patienter vous receverer un message de confirmation sur votre numero de téléphone !');
            return redirect()->to('/');
        //} catch (\Exception $e) {
        //}

    }
}
