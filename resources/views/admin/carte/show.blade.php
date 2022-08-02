@extends('admin.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Confirmation rendez vous</h3>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h5>Priorité : {{ Str::ucfirst($carte->priorite) }}</h5>
            </div>
            <div class="col-md-3">
                <h5>Date Paimenent : {{ $carte->date_paiement }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h5>Prenom : {{ $carte->prenom }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Nom : {{ $carte->nom }}</h5>
            </div>
            <div class="col-md-3">
                <h5>Date Naissance : {{ $carte->date_naissance }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h5>Lieu Naissance : {{ $carte->lieu_naissance }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Sexe : {{Str::upper( $carte->sexe) }}</h5>
            </div>
            <div class="col-md-3">
                <h5>Nationalité d'Origine : {{Str::ucfirst($carte->nationalite_origine) }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h5>Statut Nationalité : {{ Str::ucfirst($carte->statut_nationalite) }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Profession : {{Str::ucfirst( $carte->profession) }}</h5>
            </div>
            <div class="col-md-3">
                <h5>Domicile : {{Str::ucfirst($carte->domicile) }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h5>Situation Matrimoniale : {{ Str::ucfirst($carte->situation_matrimoniale) }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Taille : {{Str::ucfirst( $carte->taille) }}</h5>
            </div>
            <div class="col-md-3">
                <h5>Teint : {{Str::ucfirst($carte->teint) }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h5>Père : {{ Str::ucfirst($carte->prenom_pere) }}</h5>
            </div>
            <div class="col-md-4">
                <h5>Prenom Mère : {{Str::ucfirst( $carte->prenom_mere) }}</h5>
            </div>
            <div class="col-md-3">
                <h5>Nom Mère : {{Str::ucfirst($carte->nom_mere) }}</h5>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="form-group">
                        <label for="message">Message de confirmation</label>
                        <textarea class="form-control" name="" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection