
<div>
    <style>
        /* Set a fixed scrollable wrapper */
        .tableWrap {
            height: 500px;

            overflow: auto;
        }

        /* Set header to stick to the top of the container. */
        thead tr th {
            position: sticky;
            top: 0;
        }

        /* If we use border,
        we must use table-collapse to avoid
        a slight movement of the header row */
        table {
            border-collapse: collapse;
        }

        /* Because we must set sticky on th,
         we have to apply background styles here
         rather than on thead */
        th {
            padding: 16px 16px 16px 15px;
            border-left: 1px dotted rgba(200, 209, 224, 0.6);
            border-bottom: 1px solid #e8e8e8;
            background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
            text-align: left;
            /* With border-collapse, we must use box-shadow or psuedo elements
            for the header borders */
            box-shadow: 0 0 0 2px #e8e8e8;
        }

    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donasi ASI') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Dashboard Request ASI') }}
    </h1>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-5 lg:col-span-2">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="ml-5 hidden lg:flow-root">

            </div>
            <!--Mobile Navigation -->
            <div class="
         
            content-center grid lg:grid-cols-1 grid-cols-3 gap-4 sm:grid-cols-3">
                <div
                    class="   @if(request()->page=="request_asi")
                    ring-blue-900 ring-2
                    @endif
                    relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="p-2 h-10 w-10 bg-orangesa rounded-full text-white" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                  clip-rule="evenodd"/>
                        </svg>

                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="{{route('dashboard-request-donasi-asi')}}?page=request_asi"><button  class="
                        text-left focus:outline-none
                        ">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Request ASI
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 break-words">
                                Lihat Pengajuan
                            </p>
                        </button>
                    </a>
                    </div>
                    

                </div>
                <div
                    class="
                    @if(request()->page=="on_progress")
                   
                    ring-blue-900 ring-2
                    @endif
                    relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="p-2 h-10 w-10 bg-orangesa rounded-full text-white" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>

                    </div>
                    <div class="flex-1 min-w-0">

                        <a href="{{route('dashboard-request-donasi-asi')}}?page=on_progress"> <button class="text-left focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Sedang Berlangsung
                            </p>
                            <p class="hidden md:block text-sm text-gray-500 truncate">
                                Segera Terima Pesanan
                            </p>
                        </button>
                    </a>
                    </div>

                </div>
                <div
                    class="   @if(request()->page=="histori_asi")
                    ring-blue-900 ring-2
                    @endif
                    relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="p-2 h-10 w-10 bg-orangesa rounded-full text-white" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                  clip-rule="evenodd"/>
                        </svg>

                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="{{route('dashboard-request-donasi-asi')}}?page=histori_asi"><button  class="
                        text-left focus:outline-none
                        ">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Histori ASI
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 break-words">
                                Lihat Histori Pesananku
                            </p>
                        </button>
                    </a>
                    </div>
                    

                </div>

                <!-- More people... -->
            </div>


        </div>
        @if(request()->page == 'on_progress')
            <div class="col-span-5">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div style="" class="overflow-y-hidden overflow-x-hidden hidden lg:flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 md:px-0 lg:px-8">
                            <div class="tableWrap shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            TANGGAL
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            NAMA RESIPIEN
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KURIR
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH 
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KOTA
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            AKSI
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                        @foreach($DataPermintaanAsi as $DataPermintaan)
                                        @if($DataPermintaan->pivot->progress == 0)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataPermintaan->pivot->created_at->format('m/d/y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{$DataPermintaan->pemilik->profile_photo_url}}"
                                                             alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$DataPermintaan->pemilik->name}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"></div>
                                                @if($DataPermintaan->pivot->courir_request == 1)
                                                    <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Minta Antar</span>
                                                    @endif

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$DataPermintaan->pivot->quantity_request}} Botol</div>
                                          
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm ">
                                                {{$DataPermintaan->pivot->city}}
                                            </td>
                                       
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                            <a href="{{ route('DetailDashboardResipien-InProgressAsi',[
                                                    'idasiboard' => $DataPermintaan->pivot->id
                                                ])}}"><x-jet-button>Detail</x-jet-button></a>
                                   


                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                   
                                    <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <ul role="list" class="grid lg:hidden grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach($DataPermintaanAsi as $DataPermintaan)
                        @if($DataPermintaan->pivot->progress == 0)
                        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="w-full flex items-center justify-between p-6 space-x-6">
                                <div class="flex-1 truncate">
                                    <div class="flex items-center space-x-3">
                                        <h3 class="text-gray-900 text-sm font-medium truncate">{{$DataPermintaan->pemilik->name}} </h3>
                                        
                                        @if($DataPermintaan->pivot->courir_request == 1)
                                            <span
                                                class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Minta Antar</span>
                                        @endif
                                    </div>
                                    <p class="mt-1 text-gray-500 text-sm truncate">{{$DataPermintaan->city}}</p>
                                    <p class="mt-1 text-gray-900 text-sm truncate"><span
                                            class="font-bold"> </span>{{ $DataPermintaan->pivot->quantity_request }} Botol</p>
                                                   
                                </div>
                                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                     alt="">
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="w-0 flex-1 flex">
                                        <a href="{{ route('DetailDashboardResipien-InProgressAsi',[
                                                    'idasiboard' => $DataPermintaan->pivot->id   
                                                ])}}"
                                           class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-orangesa font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                            <!-- Heroicon name: solid/mail -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="ml-3">Detail</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                  @endif
                  @endforeach
                </ul>
              
            </div>
    @elseif(request()->page=="request_asi")
        <!-- Taruh kode dana disini -->
            <div class="col-span-5">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div style="" class="overflow-y-hidden overflow-x-hidden hidden lg:flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                        <tr class="py-2 align-middle inline-block min-w-full sm:px-6 md:px-0 lg:px-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 md:px-0 lg:px-8">
                            <div class="tableWrap shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            TANGGAL
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            NAMA RESIPIEN
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KURIR
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KOTA
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            AKSI
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($DataPermintaanAsi as $DataPermintaan)
                                        @if($DataPermintaan->pivot->progress == 1)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataPermintaan->pivot->created_at->format('m/d/y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{$DataPermintaan->pemilik->profile_photo_url}}"
                                                             alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$DataPermintaan->pemilik->name}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div
                                                    class="text-sm text-gray-900">@if($DataPermintaan->pivot->courir_request == 1)
                                                    <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Minta Antar</span>
                                                    @endif</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $DataPermintaan->pivot->quantity_request }} Botol</div>
                                                <div class="text-sm text-gray-500">
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                               
                                            </td>
                                      
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                <a href="{{ route('DetailDashboardResipien-RequestAsi',[
                                                    'idasiboard' => $DataPermintaan->pivot->id
                                                    
                                                ])}}"><x-jet-button>Detail</x-jet-button></a>
                                                
                                               
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                       
                                    </tbody>
                                </table>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <ul role="list" class="grid lg:hidden grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($DataPermintaanAsi as $DataPermintaan)

                @if($DataPermintaan->pivot->progress == 1)
                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-3">
                                    <h3 class="text-gray-900 text-sm font-medium truncate">{{$DataPermintaan->pemilik->name}}</h3>
                                    @if($DataPermintaan->pivot->courir_request == 1)
                                        <span
                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Minta Antar</span>
                                    @endif
                                </div>
                                <p class="mt-1 text-gray-500 text-sm truncate">{{$DataPermintaan->city}}</p>
                                <p class="mt-1 text-gray-900 text-sm truncate"><span
                                        class="font-bold"></span> {{$DataPermintaan->pivot->quantity_request}} Botol 
                            </div>
                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                 alt="">
                        </div>
                        <div>
                            <div class="-mt-px flex divide-x divide-gray-200">
                                <div class="w-0 flex-1 flex">
                                    <a href="{{ route('DetailDashboardResipien-RequestAsi',[
                                                    'idasiboard' => $DataPermintaan->pivot->id])}}"
                                       class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-orangesa font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                        <!-- Heroicon name: solid/mail -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                                
                                        <span class="ml-3">Detail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
    
            </ul>

            @elseif(request()->page=="histori_asi")
        <!-- Taruh kode dana disini -->
            <div class="col-span-5">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div style="" class="overflow-y-hidden overflow-x-hidden hidden lg:flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                        <tr class="py-2 align-middle inline-block min-w-full sm:px-6 md:px-0 lg:px-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 md:px-0 lg:px-8">
                            <div class="tableWrap shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            TANGGAL
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            NAMA RESIPIEN
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Keterangan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KOTA
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            AKSI
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($DataPermintaanAsi as $DataPermintaan)
                                        @if($DataPermintaan->pivot->progress == 3 || $DataPermintaan->pivot->progress == 2)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataPermintaan->pivot->created_at->format('m/d/y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{$DataPermintaan->pemilik->profile_photo_url}}"
                                                             alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$DataPermintaan->pemilik->name}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div
                                                    class="text-sm text-gray-900">@if($DataPermintaan->pivot->progress == 2)
                                                    <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Success</span>
                                                        @else
                                                        <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Failed</span>
                                                            @endif</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$DataPermintaan->pivot->quantity_request}} Botol</div>
                                                <div class="text-sm text-gray-500">
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                               
                                            </td>
                                      
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                <a href="{{ route('DetailDashboardResipien-HistoriAsi',[
                                                    'idasiboard' => $DataPermintaan->pivot->id,
                                                    'progress' => $DataPermintaan->pivot->progress
                                                    
                                                ])}}"><x-jet-button>Detail</x-jet-button></a>
                                                
                                              
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                       
                                    </tbody>
                                </table>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <ul role="list" class="grid lg:hidden grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($DataPermintaanAsi as $DataPermintaan)

                @if($DataPermintaan->pivot->progress == 3 || $DataPermintaan->pivot->progress == 2)
                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-3">
                                    <h3 class="text-gray-900 text-sm font-medium truncate">{{$DataPermintaan->pemilik->name}}</h3>
                                    @if($DataPermintaan->pivot->progress == 2)
                                                    <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Success</span>
                                                        @else
                                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Failed</span>
                                                            @endif
                                </div>
                                <p class="mt-1 text-gray-500 text-sm truncate">{{$DataPermintaan->city}}</p>
                                <p class="mt-1 text-gray-900 text-sm truncate"><span
                                        class="font-bold"></span> {{$DataPermintaan->pivot->quantity_request}} Botol 
                            </div>
                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                 alt="">
                        </div>
                        <div>
                            <div class="-mt-px flex divide-x divide-gray-200">
                                <div class="w-0 flex-1 flex">
                                    <a href="{{ route('DetailDashboardResipien-HistoriAsi',[
                                                    'idasiboard' => $DataPermintaan->pivot->id,
                                                    'progress' => $DataPermintaan->pivot->progress
                                                    ])}}"
                                       class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-orangesa font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                        <!-- Heroicon name: solid/mail -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                                
                                        <span class="ml-3">Detail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
    
            </ul>
            @endif
    </div>