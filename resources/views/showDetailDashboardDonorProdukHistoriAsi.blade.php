<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk ASI') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Informasi Riwayat Produk') }}
    </h1>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-5 lg:col-span-2">
            <div class="ml-5 hidden lg:flow-root">

            </div>
            <!--Mobile Navigatio -->

            <div class="content-center grid  lg:grid-cols-1 grid-cols-1 gap-4 sm:grid-cols-2">
                <div
                    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="p-2 h-10 w-10 bg-orangesa rounded-full text-white" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <a href="{{ route('dashboard-pendonor-donasi-asi') }}" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Kembali ke Halaman Dashboard
                            </p>
                        </a>
                    </div>
                </div>


                <!-- More people... -->
            </div>
        </div>
        <div class="col-span-5">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full"
                                 src="{{$DataASI->product_picture}}">
                        </div>
                        <div class="ml-4">
                        
                            <div class="text-sm text-gray-500">
                                <!--  -->
                                Tanggal Upload : {{date('d M Y',strtotime($DataASI->created_at))}}
                            </div>
                            <div class="flex items-center space-x-3">
                                   
                                @if($DataASI->quantityupdated == 0)
                                                    <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Habis</span>
                                                        @elseif($DataASI->status_persetujuan > 2)
                                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Failed</span>
                                                        @else
                                                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Ditolak</span>
                                                        @endif
                                </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-3">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Kurir
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                            @if($DataASI->courir_pemilik == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
                                                   @else
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
</svg>
                                                
                                                            @endif
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Jumlah Produk Donasi
                            </dt>
                        
                            <dd class="mt-1 text-sm text-gray-900">
                           
                                {{$DataASI->quantityupdated}}/{{ $DataASI->quantity }} Botol
                            
                            </dd>

                     
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Liter/Botol
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$DataASI->liter_per_pack}}
                            </dd>
                        </div>
                        <div class="sm:col-span-3 q">
                            <dt class="text-sm font-medium text-gray-500">
                                Deskripsiku
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$DataASI->description}}
                            </dd>
                        </div>

                        <div class="sm:col-span-3">
                            <dt class="text-sm font-medium text-gray-500">
                                Alamat Pengambilan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$DataASI->detail_address}}
                            </dd>
                        </div>
                        <div class="sm:col-span-3">
                            <dt class="text-sm font-medium text-gray-500">
                            Diperbarui Sejak
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                            {{date('d M Y',strtotime($DataASI->updated_at))}}
                            </dd>

                        
                                                        </div>

                                <!-- INI FORMNYA YANG DIISI BELUM CSRDF-->


                    </dl>
                </div>
            </div>
        </div>
</div>
</x-app-layout>
