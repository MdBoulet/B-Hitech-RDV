@extends('admin.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Extrait de Naissance Biometrique</h4>
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
        <h5>Liste des rendez vous en attente de confirmation</h5>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Date de Naissance</th>
                                <th>Lieu de Naissance</th>
                                <th>Sexe</th>
                                <th>Domicile</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actes as $acte)
                            <tr>
                                <td><a href="#">{{ $acte->prenom }}</a></td>
                                <td><a href="#">{{ $acte->nom }}</a></td>
                                <td>{{ $acte->date_naissance }}</td>
                                <td>{{ $acte->lieu_naissance }}</td>
                                <td>{{ Str::upper($acte->sexe) }}</td>
                                <td>{{ $acte->quartier }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection