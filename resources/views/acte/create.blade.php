@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-6 offset-md-3">
                <h4>Demander un acte de naissance biométrique</h4><hr>
                @livewire('mutli-step-form')
            </div>
        </div>
    </div>
@endsection