<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body >

    @foreach($getAllAsiProduct as $DataAsi)
        <div class="card mt-4">

  <div class="card-body d-grid">
    <h5 class="card-title">{{$DataAsi->days_after_birth}}  <span class="fs-6 text-secondary fw-bolder ms-2"> {{ $DataAsi->litre_quantity}} sks</span></h5>
    <p class="card-text">{{$DataAsi->description}}</p>
    <a href="/DataAsi/{{$DataAsi->id}}" class="btn btn-primary btn-block">See Details</a>
  </div>

        </div>
        @endforeach


    </body>
</html>