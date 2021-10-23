<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Donasi') }}
    </h2>
</x-slot>
<h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
    {{ __('Detail Produk Asi') }}
</h1>
</x-layout-app>




    <!--  
        <div class="card mt-4">

  <div class="card-body d-grid">

  <h5 class="card-title">{{$getAsiProductDetail[0]->days_after_birth}}  <span class="fs-6 text-secondary fw-bolder ms-2"> {{ $getAsiProductDetail[0]->litre_quantity}} sks</span></h5>
    <p class="card-text">{{$getAsiProductDetail[0]->description}}</p>
    <p class="card-text">{{$getAsiProductDetail[0]->User->name}}</p>
  
    <form action="{{ route('ProsesPesanAsi')}}" method="post">
    {{ csrf_field() }}
        
            <input type="hidden" name="asi_product_id" value="{{ $getAsiProductDetail[0]->id }}">
            <input type="text" name="location">
           
          <button type="sumbit"  value="Get"></button>
            </form>
    
  </div>

        </div>
        
-->
