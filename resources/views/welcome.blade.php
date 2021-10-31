<style>
  .carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
  }

  .carousel-item {
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
  }

  #carousel-1:checked ~ .control-1,
  #carousel-2:checked ~ .control-2,
  #carousel-3:checked ~ .control-3 {
    display: block;
  }

  .carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
  }

  #carousel-1:checked
    ~ .control-1
    ~ .carousel-indicators
    li:nth-child(1)
    .carousel-bullet,
  #carousel-2:checked
    ~ .control-2
    ~ .carousel-indicators
    li:nth-child(2)
    .carousel-bullet,
  #carousel-3:checked
    ~ .control-3
    ~ .carousel-indicators
    li:nth-child(3)
    .carousel-bullet {
    color:#EF4136;
    /*Set to match the Tailwind colour you want the active one to be */
  }
</style>
<x-custom>
    <x-slot name="content">
        <div class="hidden lg:block absolute -right-10 top-44" style="z-index: -1"><img width=900px src="{{asset('img/vector-welcome.png')}}"></div>
        <div class="container mt-2 md:mt-14 py-2 md:py-10 lg:px-32 mx-auto gap-10">
          <div class="flex flex-wrap -mx-3 overflow-hidden mb-14 lg:mb-72">

            <div class="my-3 px-3 w-full overflow-hidden md:block hidden text-3xl md:text-4xl text-left">
              HELPING OTHERS is the way
                <br>we HELP OURSELVES
            </div>
            <div class="my-3 px-3 w-full overflow-hidden font-black md:hidden block text-3xl md:text-4xl text-left">
              Helping Others is The Way We Help Ourself
            </div>
          
            <div class="my-3 px-3 w-full overflow-hidden md:w-1/2">
              Donasi mulai dari hal-hal kecil dan sederhana. Bantu mereka yang sedang membutuhkan. Bantu tuntaskan kasus stunting dan kelaparan di 
                Indonesia melalui website sumbangkasih yang menjunjung tinggi keadilan dan kesetaraan.
            </div>
          
            <div class="my-3 px-3 w-full overflow-hidden">
              <x-jet-button class="text-base">Join Today</x-jet-button>
            </div>
          </div>
          <div class="bg-white mb-16 text-black text-3xl text-center rounded-full py-2 max-w-2xl m-auto">Berbagi Sekarang!</div>
          
<!-- This example requires Tailwind CSS v2.0+ -->
<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 lg:gap-x-64 mb-16">
  @foreach($categories as $datacategory)
  <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex items-center justify-between p-6 space-x-6">
      <div class="flex-1">
        <div class="flex items-center space-x-3">
          <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt=""><h3 class="text-gray-900 text-lg font-bold truncate">{{ $datacategory->name }}</h3>
          
        </div>
        <p class="mt-1 text-gray-500 text-sm break-words">{{ $datacategory->description}}<br><br></p>
      </div>
      
    </div>
   
  </li>
  @endforeach
  <!-- More people... -->
</ul>
<div class="mx-auto text-center text-3xl">What can we do here?</div>
<div class="mx-auto text-center text-3xl w-36 mb-16 rounded-full h-2 bg-orange-dd"></div>
<!-- Required font awesome -->
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
/>

<div class="mb-16 carousel relative  rounded-xl relative overflow-hidden shadow-xl max-w-3xl mx-auto">
  <div class="carousel-inner relative overflow-hidden w-full">
    <!--Slide 1-->
    <input
      class="carousel-open hidden"
      type="radio"
      id="carousel-1"
      name="carousel"
      aria-hidden="true"
      hidden=""
      checked="checked"
    />
    <div
      class="carousel-item absolute opacity-0 bg-center"
      style="
        height: 500px;
        background-image: url(https://mdbootstrap.com/img/new/slides/052.jpg);
      "
    ></div>
    <label
      for="carousel-3"
      class="
        control-1
        w-10
        h-10
        ml-2
        md:ml-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        left-0
        my-auto
        flex
        justify-center
        content-center
      "
      ><i class="fas fa-angle-left mt-3"></i
    ></label>
    <label
      for="carousel-2"
      class="
        next
        control-1
        w-10
        h-10
        mr-2
        md:mr-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-orange-l
        leading-tight
        text-center
        z-10
        inset-y-0
        right-0
        my-auto
      "
      ><i class="fas fa-angle-right mt-3"></i
    ></label>

    <!--Slide 2-->
    <input
      class="carousel-open hidden"
      type="radio"
      id="carousel-2"
      name="carousel"
      aria-hidden="true"
      hidden=""
    />
    <div
      class="carousel-item absolute opacity-0 bg-center"
      style="
        height: 500px;
        background-image: url(https://mdbootstrap.com/img/new/slides/043.jpg);
      "
    ></div>
    <label
      for="carousel-1"
      class="
        control-2
        w-10
        h-10
        ml-2
        md:ml-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-orange-l
        leading-tight
        text-center
        z-10
        inset-y-0
        left-0
        my-auto
      "
      ><i class="fas fa-angle-left mt-3"></i
    ></label>
    <label
      for="carousel-3"
      class="
        next
        control-2
        w-10
        h-10
        mr-2
        md:mr-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-orange-l
        leading-tight
        text-center
        z-10
        inset-y-0
        right-0
        my-auto
      "
      ><i class="fas fa-angle-right mt-3"></i
    ></label>

    <!--Slide 3-->
    <input
      class="carousel-open hidden"
      type="radio"
      id="carousel-3"
      name="carousel"
      aria-hidden="true"
      hidden=""
    />
    <div
      class="carousel-item absolute opacity-0"
      style="
        height: 500px;
        background-image: url(https://mdbootstrap.com/img/new/slides/054.jpg);
      "
    ></div>
    <label
      for="carousel-2"
      class="
        control-3
        w-10
        h-10
        ml-2
        md:ml-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        left-0
        my-auto
      "
      ><i class="fas fa-angle-left mt-3"></i
    ></label>
    <label
      for="carousel-1"
      class="
        next
        control-3
        w-10
        h-10
        mr-2
        md:mr-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        right-0
        my-auto
      "
      ><i class="fas fa-angle-right mt-3"></i
    ></label>

    <!-- Add additional indicators for each slide-->
    <ol class="carousel-indicators">
      <li class="inline-block mr-3">
        <label
          for="carousel-1"
          class="
            carousel-bullet
            cursor-pointer
            block
            text-4xl text-orange-l
            hover:text-blue-700
          "
          >•</label
        >
      </li>
      <li class="inline-block mr-3">
        <label
          for="carousel-2"
          class="
            carousel-bullet
            cursor-pointer
            block
            text-4xl text-orange-l
            hover:text-blue-700
          "
          >•</label
        >
      </li>
      <li class="inline-block mr-3">
        <label
          for="carousel-3"
          class="
            carousel-bullet
            cursor-pointer
            block
            text-4xl text-orange-l
            hover:text-blue-700
          "
          >•</label
        >
      </li>
    </ol>
  </div>
</div>
<div class="mx-auto text-center text-3xl">Artikel Menginspirasi</div>
<div class="mx-auto text-center text-3xl w-36 mb-16 rounded-full h-2 bg-orange-dd"></div>
<div class="grid grid-cols-3 w-full gap-5 mb-32">
          
  <div class="bg-white  mx-auto text-center rounded-lg shadow-lg max-w-xs col-span-3 md:col-span-1 text-center">
    <img src="https://images.unsplash.com/photo-1600054800747-be294a6a0d26?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" alt="" class="rounded-t-3xl">
    <div class="p-6 -mt-5 relative bg-white rounded-t-3xl">
      <h2 class="font-bold mb-2 text-lg text-gray-900">Virtual Tour Bantu Hidupkan Museum di Masa Pandemi
      </h2>
      <p class="text-gray-700 mb-2">Kunjungan secara daring  menjadi salah satu inovasi yang dilakukan sejumlah museum di tengah pandemi COVID-19</p>
      
    </div>
    <x-jet-button class="">Lihat Detail</x-jet-button>
</div>
<div class="bg-white  mx-auto text-center rounded-lg shadow-lg max-w-xs col-span-3 md:col-span-1 text-center">
  <img src="https://images.unsplash.com/photo-1600054800747-be294a6a0d26?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" alt="" class="rounded-t-3xl">
  <div class="p-6 -mt-5 relative bg-white rounded-t-3xl text-center">
    <h2 class="font-bold mb-2 text-lg text-gray-900 text-center">Teknologi Kesehatan Bisa Bantu Pandemi Menjadi Endemi
    </h2>
    <p class="text-gray-700 text-center mb-2">Pemanfaatan layanan kesehatan digital berwujud telehealth bisa menjadi bagian dari upaya mengubah kondisi pandemi COVID-19 menjadi endemi</p>
    
  </div>
  <x-jet-button class="relative bottom-3">Lihat Detail</x-jet-button></div>
  <div class="bg-white  mx-auto text-center rounded-lg shadow-lg max-w-xs col-span-3 md:col-span-1 text-center">
    <img src="https://images.unsplash.com/photo-1600054800747-be294a6a0d26?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" alt="" class="rounded-t-3xl">
    <div class="p-6 -mt-5 relative bg-white rounded-t-3xl text-center">
      <h2 class="font-bold mb-2 text-lg text-gray-900 text-center">Peran Penting Dokter dan Layanan Telemedik Saat Pandemi
      </h2>
      <p class="text-gray-700 text-center mb-2">Pemanfaatan layanan kesehatan digital berwujud telehealth bisa menjadi bagian dari upaya mengubah kondisi pandemi COVID-19 menjadi endemi</p>
      
    </div>
    <x-jet-button class="relative bottom-3">Lihat Detail</x-jet-button></div>
</div>
<div class="grid grid-cols-6 items-center">
  <div class="text-2xl col-span-6 md:col-span-4 md:text-3xl text-center font-normal">Berminat ikuti kami untuk membantu warga yang membutuhkan?</div>
  <div class="col-span-6 md:col-span-2 text-center">
    <x-jet-button class="mx-1 w-1/3">Daftar Sekarang</x-jet-button>
    <x-jet-button class="mx-1 w-1/3">Berdonasi Sekarang</x-jet-button>
  </div>
</div>

        </div>
        
    </x-slot>
</x-custom>


