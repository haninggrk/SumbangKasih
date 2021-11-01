<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Donasi') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Detail Produk Asi') }}
    </h1>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-5 lg:col-span-2">
            <div class="ml-5 hidden lg:flow-root">

            </div>
            <!--Mobile Navigatio -->

            <div class="content-center grid  lg:grid-cols-1 grid-cols-1 gap-4 sm:grid-cols-2">
                <div
                    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-orangesa">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="p-2 h-10 w-10 bg-orangesa rounded-full text-white" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <a href="{{route('data-donasi')}}" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-bold text-gray-900">
                                Kembali ke Halaman ASI
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
                                 src="{{$getAsiProductDetail->pemilik->profile_photo_url}}"
                                 alt="">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                Jane Cooper
                            </div>
                            <div class="text-sm text-gray-500">
                                <!--  -->
                                Tanggal Upload : {{$getAsiProductDetail->created_at->format("d M Y")}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-3">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Tanggal Melahirkan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getAsiProductDetail->tanggal_melahirkan->format("d M Y")}}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Quantity
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getAsiProductDetail->quantity}} Botol
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Liter/Botol
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getAsiProductDetail->liter_per_pack}}
                            </dd>
                        </div>
                        <div class="sm:col-span-3 q">
                            <dt class="text-sm font-medium text-gray-500">
                                Deskripsi
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getAsiProductDetail->description}}
                            </dd>
                        </div>

                        <div class="sm:col-span-3">
                            <dt class="text-sm font-medium text-gray-500">
                                Lokasi Alamat Donatur
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{$getAsiProductDetail->pemilik->city}}
                            </dd>
                        </div>
                        <div class="sm:col-span-3" x-data="{ on: @entangle('useCourier') }">
                            <form method="POST" wire:submit.prevent="requestAsi">
                                <div class="flex items-center">
                                    <button type="button"
                                            class="relative inline-flex flex-shrink-0 h-8 w-14 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orangesa bg-gray-200"
                                            role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled"
                                            x-state:off="Not Enabled"
                                            :class="{ 'bg-orangesa': on, 'bg-gray-200': !(on) }"
                                            aria-labelledby="annual-billing-label" :aria-checked="on.toString()"
                                            @click="on = !on">
                                            <span aria-hidden="true"
                                                  class="pointer-events-none inline-block h-7 w-7 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0"
                                                  x-state:on="Enabled" x-state:off="Not Enabled"
                                                  :class="{ 'translate-x-6': on, 'translate-x-0': !(on) }"></span>
                                    </button>
                                    <span class="ml-3" id="annual-billing-label"
                                          @click="on = !on; $refs.switch.focus()">
                                          <span class="text-sm font-medium text-gray-900">Gunakan jasa kurir</span>
                                        </span>
                                </div>
                                <div class="flex items-center w-full mt-4 space-x-2">
                                    <div class="sm:col-span-1">
                                        <dt class="text-sm font-mediu mb-2 text-gray-500">
                                            Quantity
                                        </dt>
                                        <x-jet-input wire:model.lazy="quantity"
                                                     class="w-full rounded-full p-2 px-3 text-md"
                                                     placeholder="Jumlah"></x-jet-input>
                                        <x-jet-input-error for="quantity"/>
                                    </div>
                                    <div x-show="on" class="sm:col-span-2 w-full">
                                        <dt class="text-sm font-mediu mb-2 text-gray-500">
                                            Detail Alamat
                                        </dt>
                                        <x-jet-input wire:model.lazy="address"
                                                     class="w-full rounded-full p-2 px-3 text-md"
                                                     placeholder="Alamat Lengkap"></x-jet-input>
                                        <x-jet-input-error for="address"/>
                                    </div>
                                </div>
                                <div class="w-full text-right mt-4">
                                    <x-jet-button class="rounded-full text-lg bg-orange-dd">Request</x-jet-button>
                                </div>
                            </form>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
