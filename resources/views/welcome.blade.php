@extends('layouts.app')

@section('content')
<div class="main">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="main-image" style="height: 450px;background-color: gray;">

    </div>
    <br>
    <p class="demande-text">Effectuer une nouvelle demande</p>
    <div class="cards">
        <a href="{{ route('acte') }}">
            <div class="btn btn-success mr-4">
                <p>Demander un acte de naissance biométrique</p>
            </div>
        </a>
        <a href="{{ route('carte') }}">
            <div class="btn btn-success">
                <p>Demander une carte d'identité nationale biométrique</p>
            </div>
        </a>
    </div>
</div>
@endsection