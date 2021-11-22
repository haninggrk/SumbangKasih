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
            --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);

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
            {{ __('Proses Permintaan ASI') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Dashboard Permintaan ASI') }}
    </h1>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-5 lg:col-span-2">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="ml-5 hidden lg:flow-root">

            </div>
            <!--Mobile Navigation -->
            <div class="
         
            content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
                <div
                    class="   @if(request()->page=="permintaan_asi")
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
                        <a href="{{route('dashboard-permintaan-donasi-asi')}}?page=permintaan_asi"><button  class="
                        text-left focus:outline-none
                        ">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Permintaan ASI
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 break-words">
                                Lihat Permintaan
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

                        <a href="{{route('dashboard-permintaan-donasi-asi')}}?page=on_progress"> <button class="text-left focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Sedang Berlangsung
                            </p>
                            <p class="hidden md:block text-sm text-gray-500 truncate">
                                Segera Berikan Pesanan
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
                                            MINTA ANTAR
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH/LITER
                                        </th>
                                      
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            AKSI
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                        @foreach($DataResipienAsi as $DataResipien)
                                        @if($DataResipien->pivot->progress == 0)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataResipien->pivot->created_at->format('m/d/y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{$DataResipien->profile_photo_url}}"
                                                             alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$DataResipien->name}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"></div>
                                                @if($DataResipien->pivot->courir_request == 1)
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                            @endif

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">   {{$DataResipien->pivot->quantity_request}} Botol</div>
                                                <div class="text-sm text-gray-500">
                                                
                                                @foreach($DataResipien->asiResipiens as $asi)
                            
                            @if($asi->pivot->id == $DataResipien->pivot->id)
                              {{$asi->liter_per_pack}} Liter / Botol
                                       
                            @endif
                            @endforeach
                        </div>
                                          
                                            </td>
                                           
                                       
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                            <a href="{{ route('DetailDashboardPendonor-InProgressAsi',[
                                                    'idasiboard' => $DataResipien->pivot->id
                                                ])}}"><x-jet-button>Detail</x-jet-button></a>
                                   


                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                            <a href="{{ route('messages',
                                                    'idasiboard' -> $DataResipien->pivot->id
                                                )}}"><x-jet-button>Kirim Pesan</x-jet-button></a>
                                   


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

                    @foreach($DataResipienAsi as $DataResipien)
                        @if($DataResipien->pivot->progress == 0)
                        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="w-full flex items-center justify-between p-6 space-x-6">
                                <div class="flex-1 truncate">
                                    <div class="flex items-center space-x-3">
                                        <h3 class="text-gray-900 text-sm font-medium truncate">{{$DataResipien->name}} </h3>
                                        
                                      
                                    </div>

                            <p class="mt-1 text-gray-900 text-sm truncate"><span
                                            class="font-bold">{{$DataResipien->pivot->quantity_request}}</span> Botol (<span
                                            class="font-bold">
                                            @foreach($DataResipien->asiResipiens as $asi)
                            @if($asi->pivot->id == $DataResipien->pivot->id)
                                            
                            {{$asi->liter_per_pack}} </span>Liter/Botol
                            @endif
                            @endforeach
                            )</p>
                            <div class="flex mt-2">
                            @if($DataResipien->pivot->courir_request == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                @endif
                            <h6 class=" inline-block ml-1 text-gray-900 text-sm font-medium truncate">Minta Antar </h6></div>
                                           
                             <h6 class="mt-2 text-gray-500 text-sm font-medium truncate">Tanggal Pemesanan: {{date('d M Y',strtotime($DataResipien->pivot->created_at))}}</h6>
                                                   
                                </div>
                                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                     src="{{$DataResipien->profile_photo_url}}"
                                     alt="">
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="w-0 flex-1 flex">
                                        <a href="{{ route('DetailDashboardPendonor-InProgressAsi',[
                                                    'idasiboard' => $DataResipien->pivot->id   
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
    @elseif(request()->page=="permintaan_asi")
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
                                            MINTA ANTAR
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            AKSI
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($DataResipienAsi as $DataResipien)
                                        @if($DataResipien->pivot->progress == 1)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataResipien->pivot->created_at->format('m/d/y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{$DataResipien->profile_photo_url}}"
                                                             alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$DataResipien->name}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div
                                                    class="text-sm text-gray-900">@if($DataResipien->pivot->courir_request == 1)
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                            @endif</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">   {{$DataResipien->pivot->quantity_request}} Botol</div>
                                                <div class="text-sm text-gray-500">
                                                
                                                @foreach($DataResipien->asiResipiens as $asi)
                            
                            @if($asi->pivot->id == $DataResipien->pivot->id)
                            {{$asi->liter_per_pack}} Liter / Botol
                                       
                            @endif
                            @endforeach</div>
                                                
                                            </td>
                                          
                                      
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                <a href="{{ route('DetailDashboardPendonor-RequestAsi',[
                                                    'idasiboard' => $DataResipien->pivot->id
                                                    
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

                @foreach($DataResipienAsi as $DataResipien)

                @if($DataResipien->pivot->progress == 1)
                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-3">
                               
                                    <h3 class="text-gray-900 text-sm font-medium truncate">{{$DataResipien->name}}</h3>
                                
                                </div>

                            <p class="mt-1 text-gray-900 text-sm truncate"><span
                                            class="font-bold">{{$DataResipien->pivot->quantity_request}}</span> Botol (<span
                                            class="font-bold">
                                            @foreach($DataResipien->asiResipiens as $asi)
                            @if($asi->pivot->id == $DataResipien->pivot->id)
                                            
                            {{$asi->liter_per_pack}} </span>Liter/Botol
                            @endif
                            @endforeach
                            )</p>

                            <h6 class="mt-2 text-gray-900 text-sm font-medium truncate">Minta Antar
                            @if($DataResipien->pivot->courir_request == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                            @endif
                            </h6>
                             <h6 class="mt-2 text-gray-500 text-sm font-medium truncate">Tanggal Pemesanan: {{date('d M Y',strtotime($DataResipien->pivot->created_at))}}</h6>
                            </div>
                            
                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                 src="{{$DataResipien->profile_photo_url}}">

                                
                                 
                        </div>
                        
                        <div>
                            
                            <div class="-mt-px flex divide-x divide-gray-200">
                                <div class="w-0 flex-1 flex">
                                    <a href="{{ route('DetailDashboardPendonor-RequestAsi',[
                                                    'idasiboard' => $DataResipien->pivot->id])}}"
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

