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

    
        <div class="card mt-4">

  <div class="card-body d-grid">

  <h5 class="card-title">{{$getAsiProductDetail[0]->days_after_birth}}  <span class="fs-6 text-secondary fw-bolder ms-2"> {{ $getAsiProductDetail[0]->litre_quantity}} sks</span></h5>
    <p class="card-text">{{$getAsiProductDetail[0]->description}}</p>
    <p class="card-text">{{$getAsiProductDetail[0]->User->name}}</p>
  <form action="{{ route('ProsesAddAsi')}}" method="post">
    {{ csrf_field() }}
        
            <input type="hidden" name="asi_product_id" value="{{ $getAsiProductDetail[0]->id }}"></input>
            <input type="text" name="location"></input>
           
          <button type="sumbit"  value="Get"></button>
            </form>
    
  </div>

        </div>
        


    </body>
</html>