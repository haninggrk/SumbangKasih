<!-- @foreach($getInfo as $dataPesananResipien)

<br>
Nama Resipien={{$getInfo->name}}
<br>
quantity yang direquest = {{$getInfo->pivot->quantity_request}}
<br>
jumlah botol yg dimlki oleh pendonor saat ini={{ $getInfoAsi->quantityupdated }}
<br>
detail almat rsipien={{$getInfo->pivot->detail_address_resipien}}
<br>
tanggal dipesan={{$getInfo->pivot->created_at}}
@endforeach -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permintaan ASI') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Detail Permintaan') }}
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
                        <a href="{{ route('dashboard-permintaan-donasi-asi') }}" class="focus:outline-none">
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
                                 src="{{$getInfo->profile_photo_url}}">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                            {{$getInfo->name}}
                            </div>
                            <div class="text-sm text-gray-500">
                                <!--  -->
                                Tanggal Permintaan : {{date('d M Y',strtotime($getInfo->pivot->created_at))}}
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
                            @if($getInfo->pivot->courir_request == 1)
                                                    <span
                                                            class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Minta Antar</span>
                                                    @else
                                                    -
                                                            @endif
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Jumlah Permintaan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getInfo->pivot->quantity_request}} Botol
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Liter/Botol
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">

                                {{$getInfoAsi->liter_per_pack}}
                            </dd>
                        </div>
                        <div class="sm:col-span-3 q">
                            <dt class="text-sm font-medium text-gray-500">
                                Deskripsi Produk ASI
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getInfoAsi->description}}
                            </dd>
                        </div>

                        <div class="sm:col-span-3">
                            <dt class="text-sm font-medium text-gray-500">
                                Alamat Resipien
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getInfo->pivot->detail_address_resipien}}
                            </dd>
                        </div>
                        <form method="POST" action="{{ route('proses-permintaan-asi-inprogress-pendonor') }}">
                            @csrf
                            <input type="hidden" name="asiBoardId" value="{{$idasiboard}}">
                            <input type="hidden" name="asiId" value="{{$getInfoAsi->id}}">
                        
                        <x-jet-button name="batal">Batalkan</x-jet-button>
                        </form>


                                <!-- INI FORMNYA YANG DIISI BELUM CSRDF-->


                    </dl>
                </div>
            </div>
        </div>
</div>
</x-app-layout>

