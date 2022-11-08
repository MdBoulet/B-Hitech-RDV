<div>
    <form wire:submit.prevent="register">

        {{-- Step one --}}
        @if ($currentStep == 1)
            <div class="step-one" style="margin-top: 40px;">
                <div class="card">
                    <div class="card-header bg-secondary text-white">ETAPE 1/4 - ELEMENTS DE LA DEMANDE</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="type_demande">Type de Demande</label>
                                    <select id="type_demande" class="form-control" wire:model="type_demande">
                                        <option value="">........</option>
                                        <option value="premiere_demande">Premiere Demande</option>
                                        <option value="renouvellement">Renouvellement</option>
                                        <option value="duplicata">Duplicata</option>
                                    </select>
                                    @error('type_demande') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Priorité</label>
                               <div class="form-group">
                                   <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Ordinaire</label>
                                                <input type="radio" name="priorite" id="priorite" value="ordinaire" wire:model="priorite">
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="">VIP</label>
                                                 <input type="radio" name="priorite" id="priorite" value="vip" wire:model="priorite">
                                             </div>
                                        </div>
                                   </fieldset>
                                   @error('priorite') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                                </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Date de Paiement</label>
                                    <input type="date" class="form-control" wire:model="date_paiement">
                                    @error('date_paiement') <span class="error" style="color: red;">{{ $message }}</span> @enderror
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
                <div class="card-header bg-secondary text-white">ETAPE 2/4 - INFORMATIONS PERSONNELLES</div>
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Date de Naissance</label>
                                <input type="date" class="form-control" placeholder="Date de Naissance" wire:model="date_naissance">
                                @error('date_naissance') <span class="error" style="color: red;">{{ $message }}</span> @enderror
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
                                <label for="">Sexe</label>
                                <select id="" class="form-control" wire:model="sexe">
									<option value="">..........</option>
                                    <option value="m">M</option>
                                    <option value="f">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nationnalité d'Origine</label>
                                <input type="text" class="form-control" placeholder="Nationalité D'origine" wire:model="nationalite_origine">
                                @error('nationalite_origine') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Statut de Nationalité</label>
                                <fieldset>
                                     <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Naissance</label>
                                            <input type="radio" name="statut_nationalite" id="statut_nationalite" value="naissance" wire:model="statut_nationalite">
                                        </div>
                                        <div class="col-md-4'">
                                            <label for="">Naturalisation</label>
                                            <input type="radio" name="statut_nationalite" id="statut_nationalite" value="naturalisation" wire:model="statut_nationalite">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Mariage</label>
                                            <input type="radio" name="statut_nationalite" id="statut_nationalite" value="mariage" wire:model="statut_nationalite">
                                        </div>
                                     </div>
                                </fieldset>
                                @error('statut_nationalite') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Profession</label>
								<input type="text" class="form-control" placeholder="Profession" wire:model="profession">
								@error('profession') <span class="error" style="color: red;">{{ $message }}</span> @enderror
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Domicile</label>
								<input type="text" class="form-control" placeholder="Domicile" wire:model="domicile">
								@error('domicile') <span class="error" style="color: red;">{{ $message }}</span> @enderror
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Situation matrimoniale</label>
								<select name="" id="" class="form-control" wire:model="situation_matrimoniale">
									<option value="">...........</option>
									<option value="celibataire">Celibataire</option>
									<option value="marie">Marié(e)</option>
									<option value="veuf">Veuf(Veuve)</option>
									<option value="divorce">Divorcé</option>
								</select>
								@error('situation_matrimoniale') <span class="error" style="color: red;">{{ $message }}</span> @enderror
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
                <div class="card-header bg-secondary text-white">ETAPE 3/4 - SIGNALEMENT</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Taille (cm)</label>
                                <input type="number" class="form-control" placeholder="Taille (cm)" wire:model="taille">
                                @error('taille') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Teint</label>
                               <input type="text" class="form-control" placeholder="Teint" wire:model="teint">
                               @error('teint') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Signes particulières</label>
                                <input type="text" class="form-control" placeholder="Signes Particulières" wire:model="signe_particuliere">
                                @error('signe_particuliere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Couleur des cheveux</label>
                                <input type="text" class="form-control" placeholder="Couleur des cheveux" wire:model="couleur_cheveux">
                                @error('couleur_cheveux') <span class="error" style="color: red;">{{ $message }}</span> @enderror
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
                <div class="card-header bg-secondary text-white">ETAPE 4/4 - INFORMATIONS ASCENDANTES</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prenom Pere</label>
                                <input type="text" class="form-control" placeholder="Prenom père" wire:model="prenom_pere">
                                @error('prenom_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Nom Pere</label>
                               <input type="text" class="form-control" placeholder="Nom père" wire:model="nom_pere">
                               @error('nom_pere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                           </div>
                       </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prenom Mere</label>
                                <input type="text" class="form-control" placeholder="Prenom mère" wire:model="prenom_mere">
                                @error('prenom_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Nom Mere</label>
                               <input type="text" class="form-control" placeholder="Nom mère" wire:model="nom_mere">
                               @error('nom_mere') <span class="error" style="color: red;">{{ $message }}</span> @enderror
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
                <div class="row">
                    <div class="col-md-12">
                        @include('livewire.calendar')
                        <!--
                        <div class="form-group">
                            <label for="">Date du rendez-vous</label>
                            <input
                                x-data
                                x-init="flatpickr($refs.input, {{json_encode((object)$options)}});"
                                x-ref="input"
                                type="text" class="form-control" placeholder="Date du rendez-vous" wire:model="appointment_date">
                            @error('appointment_date') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                        </div>
                        -->
                    </div>
                </div>
            </div>
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decrement()">Precedent</button>
            @endif
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-success" wire:click="increment()">Suivant</button>
            @endif
            @if ($currentStep == 5)
                <button type="submit" class="btn btn-md btn-primary">Envoyer</button>
            @endif
        </div>
    </form>
</div>
