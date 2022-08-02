@extends('layouts.app')

@section('content')
    <div class="main">
        <h4>Demander un acte de naissance biométrique</h4>
        <p>Pour faire une demande de retrait de la carte d'identité biométrique</p>
        <p>Prendre en compte les dispositions suivantes : </p>
        <ul>
            <li>Renseigner soigneusement tous les champs obligatoires, Après validation, vous ne pourrez
                plus modifier votre demande
            </li>
            <li>Donner votre numero principal. Vous serez informé de l'avancement de votre dossier.</li>
            <li>Mettre les pièces jointes en format PDF ou JPEG (taille inférieures à 2M)</li>
            <li>En cas de question ou de problème, veuillez vous rendre à la mairie la plus proche de vous</li>
        </ul>
        <br>
        <a href="{{ route('demandeCarte') }}" class="btn btn-success">Commencer</a>
    </div>
@endsection