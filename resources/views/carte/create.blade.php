@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-6 offset-md-3">
                <h4>Demander une carte d'identité biométrique</h4>
                @livewire('carte-step-form')
            </div>
        </div>
    </div>
@endsection