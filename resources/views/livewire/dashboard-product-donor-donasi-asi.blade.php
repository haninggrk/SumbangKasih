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
            {{ __('Produk ASI') }}
        </h2>
    </x-slot>
    <div class="sm:flex sm:items-center">
    <h1 class="mb-5 sm:inline-block font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Dashboard Produk ASI') }}
    </h1><a href="{{route('uploadasi')}}"><x-jet-button class="mb-5 sm:ml-5">Tambah Donasi ASI +</x-jet-button></a></div>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-5 lg:col-span-2">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="ml-5 hidden lg:flow-root">

            </div>
            <!--Mobile Navigation -->
            <div class="
         
            content-center grid lg:grid-cols-1 grid-cols-3 gap-4 sm:grid-cols-3">
                <div
                    class="   @if($page=="request_asi")
                    ring-blue-900 ring-2
                    @endif
                    relative rounded-lg text-center sm:text-left border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                    <div class="sm:flex-shrink-0">
                        <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src="{{asset('img/pesanan-asi.svg')}}"></div>

                    </div>
                    <div class="sm:flex-1   min-w-0">
                        <button wire:click="setPage('request_asi')"  class="
                        text-center md:text-left focus:outline-none
                        ">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Request ASI
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 break-words">
                                Menunggu Persetujuan Admin
                            </p>
                        </button>
                   
                    </div>
                    

                </div>
                <div
                    class="
                    @if($page=="on_progress")
                    ring-blue-900 ring-2
                    @endif relative rounded-lg text-center lg:text-left border border-gray-300 bg-white px-2 lg:px-6 py-5 shadow-sm block sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                    <div class="lg:flex-shrink-0 inline-block">
                        <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src="{{asset('img/permintaan-asi.svg')}}"></div>

                    </div>
                    <div class="lg:flex-1  lg:min-w-0 inline-block">

                        <button wire:click="setPage('on_progress')"  class="
                        text-center md:text-left focus:outline-none
                        ">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Sedang Berlangsung
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 break-words">
                                Produk ASI Terupload
                            </p>
                        </button>
                    </div>

                </div>
                <div
                    class="  text-center sm:text-left @if($page=="histori_asi")
                    ring-blue-900 ring-2
                    @endif
                    relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm sm:flex items-center sm:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:">
                    <div class="sm:flex-shrink-0">
                        <div class="p-2 h-10 w-10 inline-block sm:block bg-orangesa rounded-full text-white "><img class="filter-white" src="{{asset('img/history.svg')}}"></div>

                    </div>
                    <div class="sm:flex-1 sm:min-w-0">
                        <button wire:click="setPage('histori_asi')"  class="
                        text-center md:text-left focus:outline-none
                        ">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Histori Produk ASI
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 break-words">
                                Lihat Histori Produk ASI
                            </p>
                        </button>
                    </div>
                    

                </div>

                <!-- More people... -->
            </div>


        </div>
        @if($page == 'on_progress')
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
                                            DIPERBARUI
                                        </th>
        
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KURIR
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KETERSEDIAAN
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

                                        @foreach($DataDonorAsiUser as $DataASI)
                                        @if($DataASI->status_persetujuan == 1)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataASI->updated_at->format('m/d/y')}}</td>
                                         
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div
                                                    class="text-sm text-gray-900">@if($DataASI->courir_pemilik == 1)
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
                                            <div class="text-sm text-gray-900">  {{ $DataASI->quantityupdated }}/{{ $DataASI->quantity }} Botol</div>
                                                <div class="text-sm text-gray-500">                          
                            {{$DataASI->liter_per_pack}} Liter / Botol
                                       
                           </div>
                                                
                                            </td>

                                            
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm ">
                                                {{$DataASI->city}}
                                           
                                           
                                            </td>
                                       
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                            <a href="{{ route('DetailDashboardDonorProdukAsi',[
                                                    'idasi' => $DataASI->id
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

                    @foreach($DataDonorAsiUser as $DataASI)
                        @if($DataASI->status_persetujuan == 1)
                        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="w-full flex items-center justify-between p-6 space-x-6">
                                <div class="flex-1 truncate">
                                    <p class="mt-1 text-gray-500 text-sm truncate">{{$DataASI->city}}</p>
                                   
                                    <p class="mt-1 text-gray-900 text-sm truncate">Ketersediaan: <span
                                            class="font-bold">{{ $DataASI->quantityupdated }}/{{ $DataASI->quantity }} </span> Botol (<span
                                            class="font-bold">

                            {{$DataASI->liter_per_pack}} </span>Liter/Botol
                           
                            )</p>

                            <h6 class="mt-2 text-gray-900 text-sm font-medium truncate">Kurir
                            @if($DataASI->courir_pemilik == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                            @endif
                            </h6>
                             <h6 class="mt-2 text-gray-500 text-sm font-medium truncate">Diperbarui Sejak: {{date('d M Y',strtotime($DataASI->updated_at))}}</h6>



                                   
                                                   
                                </div>
                                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                     src="{{$DataASI->product_picture}}"
                                     alt="">
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="w-0 flex-1 flex">
                                        <a href="{{ route('DetailDashboardDonorProdukAsi',[
                                                    'idasi' => $DataASI->id   
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
    @elseif($page=="request_asi")
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
                                        @foreach($DataDonorAsiUser as $DataASI)
                                        @if($DataASI->status_persetujuan == 0)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataASI->created_at->format('m/d/y')}}</td>
                                          
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div
                                                    class="text-sm text-gray-900">@if($DataASI->courir_pemilik == 1)
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
                                            <div class="text-sm text-gray-900">  {{ $DataASI->quantity }} Botol</div>
                                                <div class="text-sm text-gray-500">
                                                
                            {{$DataASI->liter_per_pack}} Liter / Botol
                                       
                           </div>
                                                
                                            </td>


                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm ">
                                                {{$DataASI->city}}
                                           
                                           
                                            </td>
                                      
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                <a href="{{ route('DetailDashboardDonorProdukAsi',[
                                                    'idasi' => $DataASI->id
                                                    
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

                @foreach($DataDonorAsiUser as $DataASI)

                @if($DataASI->status_persetujuan == 0)
                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                
                                <p class="mt-1 text-gray-500 text-sm truncate">{{$DataASI->city}}</p>
                              

                                        <p class="mt-1 text-gray-900 text-sm truncate"><span
                                            class="font-bold">{{  $DataASI->quantity }}</span> Botol (<span
                                            class="font-bold">
                                
                            {{$DataASI->liter_per_pack}} </span>Liter/Botol
                 
                            )</p>

                            <h6 class="mt-2 text-gray-900 text-sm font-medium truncate">Kurir
                            @if($DataASI->courir_pemilik == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                            @endif
                            </h6>
                             <h6 class="mt-2 text-gray-500 text-sm font-medium truncate">Tanggal Upload: {{date('d M Y',strtotime($DataASI->created_at))}}</h6>


                            </div>
                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                 src="{{ $DataASI->product_picture }}"
                                 alt="">
                        </div>
                        <div>
                            <div class="-mt-px flex divide-x divide-gray-200">
                                <div class="w-0 flex-1 flex">
                                    <a href="{{ route('DetailDashboardDonorProdukAsi',[
                                                    'idasi' => $DataASI->id])}}"
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

            @elseif($page=="histori_asi")
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
                                            Keterangan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH PRODUK DONASI
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
                                        @foreach($DataDonorAsiUser as $DataASI)
                                        @if($DataASI->status_persetujuan == 2 || $DataASI->quantityupdated == 0 || $DataASI->status_persetujuan == 3)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataASI->updated_at->format('m/d/y')}}</td>
                                           
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div
                                                    class="text-sm text-gray-900">@if($DataASI->quantityupdated == 0)
                                                    <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Habis</span>
                                                        @elseif($DataASI->status_persetujuan > 2)
                                                        <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Dibatalkan</span>
                                                            @else
                                                            <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Ditolak</span>
                                                            @endif</div>

                                            </td>


                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">  {{$DataASI->quantityupdated}}/{{ $DataASI->quantity }} Botol</div>
                                                <div class="text-sm text-gray-500">
                                                
                            {{$DataASI->liter_per_pack}} Liter / Botol
                                       
                           </div>
                                                
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm ">
                                                {{$DataASI->city}}
                                           
                                           
                                            </td>
                                      
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                <a href="{{ route('DetailDashboardDonorProduk-HistoriAsi',[
                                                    'idasi' => $DataASI->id,
                                                    
                                                    
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

                @foreach($DataDonorAsiUser as $DataASI)

                @if($DataASI->status_persetujuan == 2 || $DataASI->quantityupdated == 0 || $DataASI->status_persetujuan == 3)
                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-3">
                                   
                                @if($DataASI->quantityupdated == 0)
                                                    <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Habis</span>
                                                    {{$DataASI->updated_at->format('m/d/y')}}
                                                        @elseif($DataASI->status_persetujuan > 2)
                                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Dibatalkan</span>
                                                        {{$DataASI->updated_at->format('m/d/y')}}
                                                        @else
                                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Ditolak</span>
                                                        {{$DataASI->updated_at->format('m/d/y')}}
                                                        @endif
                                </div>
                                <p class="mt-1 text-gray-500 text-sm truncate">{{$DataASI->city}}</p>

                                        <p class="mt-3 text-gray-900 text-sm truncate"><span
                                            class="font-bold">Jumlah Produk Donasi <br>{{$DataASI->quantityupdated}}/{{ $DataASI->quantity }}</span> Botol (<span
                                            class="font-bold">
                                
                            {{$DataASI->liter_per_pack}} </span>Liter/Botol
                 
                            )</p>
                            </div>
                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                 src="{{ $DataASI->product_picture }}"
                                 alt="">
                        </div>
                        <div>
                            <div class="-mt-px flex divide-x divide-gray-200">
                                <div class="w-0 flex-1 flex">
                                    <a href="{{ route('DetailDashboardDonorProduk-HistoriAsi',[
                                                    'idasi' => $DataASI->id,
                                                  
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