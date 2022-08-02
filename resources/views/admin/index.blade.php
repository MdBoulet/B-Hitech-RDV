@extends('admin.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Carte d'identité biométrique</h4>
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
                                <th>Profession</th>
                                <th>Domicile</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartes as $carte)
                            <tr>
                                <td><a href="{{ route('showCarte', $carte->id)}}">{{ $carte->prenom }}</a></td>
                                <td><a href="{{ route('showCarte', $carte->id)}}">{{ $carte->nom }}</a></td>
                                <td>{{ $carte->date_naissance }}</td>
                                <td>{{ $carte->lieu_naissance }}</td>
                                <td>{{ $carte->profession}}</td>
                                <td>{{ $carte->domicile }}</td>
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