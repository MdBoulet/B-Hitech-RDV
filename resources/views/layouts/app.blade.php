<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B-Hitech RDV</title>
    @livewireStyles
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/Coat_of_arms_of_Guinea.png')}}" alt="" style="height: 120px;" class="mt-3">
        <h2>Les demarches en ligne de l'administration guinéenne</h2>
        @yield('content')
    </div>

    <br><br>
    @livewireScripts
</body>
</html>
