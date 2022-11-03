@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-12">
                <h4>Demander un acte de naissance biométrique</h4>
                @livewire('mutli-step-form')
            </div>
        </div>
    </div>
@endsection