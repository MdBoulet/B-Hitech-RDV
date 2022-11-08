<div>
    <form wire:submit.prevent="register">
        {{-- Step one --}}
        @if ($currentStep == 1)
        <div class="step-one" style="margin-top: 40px;">
            <div class="card">
                <div class="card-header bg-secondary text-white">ETAPE 1/5 - REFERENCE DE L'ACTE</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="commune">Commune</label>
                                <select name="commune_id" id="commune" class="form-control" wire:model="commune_id">
                                    <option value=""></option>
                                    @foreach($communes as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('commune_id') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Année</label>
                                <input type="number" class="form-control" placeholder="Année" wire:model="annee">
                                @error('annee') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Registre ou Jugement</label>
                               <input type="text" class="form-control" placeholder="Registre ou jugement" wire:model="jugement">
                               @error('jugement') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Numero de l'Acte</label>
                                <input type="text" class="form-control" placeholder="Numero de l'Acte" wire:model="num_acte">
                                @error('num_acte') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Feuillet</label>
                                <input type="text" class="form-control" placeholder="Feuillet" wire:model="feuillet">
                                @error('feuillet') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 2 --}}
        @if ($currentStep == 2)
        <div class="step-one" style="margin-top: 40px;">
            <div class="card">
                <div class="card-header bg-secondary text-white">ETAPE 2/5 - INFORMATIONS PERSONNELLES</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom" wire:model="prenom">
                                @error('prenom') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="">Nom</label>
                               <input type="text" class="form-control" placeholder="Nom" wire:model="nom">
                               @error('nom') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date de Naissance</label>
                                <input type="date" class="form-control" placeholder="Date de Naissance" wire:model="date_naissance">
                                @error('date_naissance') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Heure de Naissance</label>
                                <input type="time" class="form-control" placeholder="Heure de Naissance" wire:model="heure_naissance">
                                @error('heure_naissance') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Lieu de Naissance</label>
                                <input type="text" class="form-control" placeholder="Lieu de naissance" wire:model="lieu_naissance">
                                @error('lieu_naissance') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Quartier</label>
                                <input type="text" class="form-control" placeholder="Quartier" wire:model="quartier">
                                @error('quartier') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Secteur</label>
                                <input type="text" class="form-control" placeholder="Secteur" wire:model="secteur">
                                @error('secteur') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sexe</label>
                                <select id="" class="form-control" wire:model="sexe">
                                    <option value="">......</option>
                                    <option value="m">M</option>
                                    <option value="f">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Rang de Naissance</label>
                                <input type="text" class="form-control" placeholder="Rang de naissance" wire:model="rang_naissance">
                                @error('rang_naissance') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 3 --}}
        @if ($currentStep == 3)
        <div class="step-one" style="margin-top: 40px;">
            <div class="card">
                <div class="card-header bg-secondary text-white">ETAPE 3/5 - FILIATION (Père)</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom" wire:model="prenom_pere">
                                @error('prenom_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Nom</label>
                               <input type="text" class="form-control" placeholder="Nom" wire:model="nom_pere">
                               @error('nom_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date de Naissance</label>
                                <input type="date" class="form-control" placeholder="Date de Naissance" wire:model="date_naissance_pere">
                                @error('date_naissance_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lieu de Naissance</label>
                                <input type="text" class="form-control" placeholder="Lieu de Naissance" wire:model="lieu_naissance_pere">
                                @error('lieu_naissance_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Profession</label>
                                <input type="text" class="form-control" placeholder="Profession" wire:model="profession_pere">
                                @error('profession_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" wire:model="contact_pere">
                                @error('contact_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Domicile</label>
                                <input type="text" class="form-control" placeholder="Domicile" wire:model="domicile_pere">
                                @error('domicile_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 4 --}}
        @if ($currentStep == 4)
        <div class="step-one" style="margin-top: 40px;">
            <div class="card">
                <div class="card-header bg-secondary text-white">ETAPE 4/5 - FILIATION (Mère)</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom" wire:model="prenom_mere">
                                @error('prenom_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Nom</label>
                               <input type="text" class="form-control" placeholder="Nom" wire:model="nom_mere">
                               @error('nom_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date de Naissance</label>
                                <input type="date" class="form-control" placeholder="Date de Naissance" wire:model="date_naissance_mere">
                                @error('date_naissance_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lieu de Naissance</label>
                                <input type="text" class="form-control" placeholder="Lieu de Naissance" wire:model="lieu_naissance_mere">
                                @error('lieu_naissance_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Profession</label>
                                <input type="text" class="form-control" placeholder="Profession" wire:model="profession_mere">
                                @error('profession_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" wire:model="contact_mere">
                                @error('contact_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Domicile</label>
                                <input type="text" class="form-control" placeholder="Domicile" wire:model="domicile_mere">
                                @error('domicile_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 5 --}}
        @if ($currentStep == 5)
        <div class="step-one" style="margin-top: 40px;">
            <div class="card">
                <div class="card-header bg-secondary text-white">ETAPE 5/5 - LE DECLARANT OU REQUERANT</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom" wire:model="prenom_declarant">
                                @error('prenom_declarant') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Nom</label>
                               <input type="text" class="form-control" placeholder="Nom" wire:model="nom_declarant">
                               @error('nom_declarant') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date de Naissance</label>
                                <input type="date" class="form-control" placeholder="Date de Naissance" wire:model="date_naissance_declarant">
                                @error('date_naissance_declarant') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lieu de Naissance</label>
                                <input type="text" class="form-control" placeholder="Lieu de Naissance" wire:model="lieu_naissance_declarant">
                                @error('lieu_naissance_declarant') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lien de parenté</label>
                                <input type="text" class="form-control" placeholder="Lien de parenté" wire:model="lien_parente">
                                @error('lien_parente') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" wire:model="contact_declarant">
                                @error('contact_declarant') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Domicile</label>
                                <input type="text" class="form-control" placeholder="Domicile" wire:model="domicile_declarant">
                                @error('domicile_declarant') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 5 --}}
        @if ($currentStep == 6)
            <div class="step-one" style="margin-top: 40px;">
                <div class="card">
                    <div class="card-header bg-secondary text-white">DATE DU RENDEZ-VOUS</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @include('livewire.calendar')

                            <!--                                <div class="form-group">
                                    <label for="">Date du rendez-vous</label>
                                    <input
                                        x-data
                                        x-init="flatpickr($refs.input, {{json_encode((object)$options)}});"
                                        x-ref="input"
                                        type="text" class="form-control" placeholder="Date du rendez-vous" wire:model="appointment_date">
                                    @error('appointment_date') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decrement()">Precedent</button>
            @endif
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 ||  $currentStep == 5)
                <button type="button" class="btn btn-md btn-success" wire:click="increment()">Suivant</button>
            @endif
            @if ($currentStep == 6)
                <button type="submit" class="btn btn-md btn-primary">Envoyer</button>
            @endif
        </div>
    </form>

</div>
