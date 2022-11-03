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
                                <select name="commune" id="commune" class="form-control" wire:model="commune">
                                    <option value=""></option>
                                    <option value="kaloum">Kaloum</option>
                                    <option value="dixinn">Dixinn</option>
                                    <option value="matam">Matam</option>
                                    <option value="ratoma">Ratoma</option>
                                    <option value="matoto">Matoto</option>
                                </select>
                                @error('commune') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Année</label>
                                <input type="text" class="form-control" placeholder="Année" wire:model="annee">
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
                                <input type="text" class="form-control" placeholder="Heure de Naissance" wire:model="heure_naissance">
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

        @if ($currentStep == 6)
            <div>
                <table class="table">
                    <thead>
                        <tr class="yui-dt-first yui-dt-last yui-dt-liner">
                            <th scope="col" id="horaire" width="16%">Horaire</th>
                            <th scope="col" id="lundi" width="12%"
                                style="text-align: center;">Lundi<br />
                            14/11/2022</th>
                            <th scope="col" id="mardi" width="12%"
                                style="text-align: center;">Mardi<br />
                            15/11/2022</th>
                            <th scope="col" id="mercredi" width="12%"
                                style="text-align: center;">Mercredi<br />
                            16/11/2022</th>
                            <th scope="col" id="jeudi" width="12%"
                                style="text-align: center;">Jeudi<br />
                            17/11/2022</th>
                            <th scope="col" id="vendredi" width="12%"
                                style="text-align: center;">Vendredi<br />
                            18/11/2022</th>
                            <th scope="col" id="samedi" width="12%"
                                style="text-align: center;">Samedi<br />
                            19/11/2022</th>
                            <th scope="col" id="dimanche" width="12%"
                                style="text-align: center;">Dimanche<br />
                            20/11/2022</th>
                        </tr>
                    </thead>
                    <tbody>
							
                        <tr class="">
                            <td headers="horaire"> De 08:30 à 09:00</td>

                            
                                <td style="text-align: center;"></td>
                                
                            
                                <td style="text-align: center;">
                                        
                                        <div class="fr-radio-group">
                                            <input type="radio" id="creneau1"
                                                class="btRadio" name="idCreneauRdv"
                                                value="5606829"
                                                
                                                 />
                                            <label class="fr-label" for="creneau1"></label>
                                        </div>
                                    </td>
                                
                            
                                <td style="text-align: center;">
                                        
                                        <div class="fr-radio-group">
                                            <input type="radio" id="creneau2"
                                                class="btRadio" name="idCreneauRdv"
                                                value="5606830"
                                                
                                                 />
                                            <label class="fr-label" for="creneau2"></label>
                                        </div>
                                    </td>
                                
                            
                                <td style="text-align: center;">
                                        
                                        <div class="fr-radio-group">
                                            <input type="radio" id="creneau3"
                                                class="btRadio" name="idCreneauRdv"
                                                value="5606831"
                                                
                                                 />
                                            <label class="fr-label" for="creneau3"></label>
                                        </div>
                                    </td>
                                
                            
                                <td style="text-align: center;">
                                        
                                        <div class="fr-radio-group">
                                            <input type="radio" id="creneau4"
                                                class="btRadio" name="idCreneauRdv"
                                                value="5606832"
                                                
                                                 />
                                            <label class="fr-label" for="creneau4"></label>
                                        </div>
                                    </td>
                                
                            
                                <td style="text-align: center;"></td>
                                
                            
                                <td style="text-align: center;"></td>
                                
                            
                        </tr>
                    
                        <tr class="">
							<td headers="horaire"> De 09:00 à 09:30</td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">
                                <div class="fr-radio-group">
                                    <input type="radio" id="creneau8"
                                        class="btRadio" name="idCreneauRdv"
                                        value="5606836"
                                        
                                         />
                                    <label class="fr-label" for="creneau8"></label>
                                </div>
                            </td>	
							<td style="text-align: center;">
                                <div class="fr-radio-group">
                                    <input type="radio" id="creneau9"
                                        class="btRadio" name="idCreneauRdv"
                                        value="5606837"
                                        
                                         />
                                    <label class="fr-label" for="creneau9"></label>
                                </div>
                            </td>			
							<td style="text-align: center;">
                                <div class="fr-radio-group">
                                    <input type="radio" id="creneau10"
                                        class="btRadio" name="idCreneauRdv"
                                        value="5606838"
                                        
                                         />
                                    <label class="fr-label" for="creneau10"></label>
                                </div>
                            </td>		
							
                            <td style="text-align: center;">
                                <div class="fr-radio-group">
                                    <input type="radio" id="creneau11"
                                        class="btRadio" name="idCreneauRdv"
                                        value="5606839"
                                        
                                         />
                                    <label class="fr-label" for="creneau11"></label>
                                </div>
                            </td>
							<td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
						</tr>
                </tbody>
                </table>
            </div>
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decrement()">Precedent</button>   
            @endif
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" class="btn btn-md btn-success" wire:click="increment()">Suivant</button>
            @endif
            @if ($currentStep == 6)
                <button type="submit" class="btn btn-md btn-primary">Envoyer</button>
            @endif
        </div>
    </form>
    
</div>
