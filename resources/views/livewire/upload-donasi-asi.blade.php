<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk ASI') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        Donor ASI
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

        <div class="mt-5 md:mt-0 col-span-7 md:col-span-5">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="addAsi" x-data="{ on: @entangle('kurir') }">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Tanggal
                                        Melahirkan</label>
                                    <input wire:model.lazy="tanggal_melahirkan" id="first-name" required type="date"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Kota</label>
                                    <input wire:model.lazy="city" required type="text"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Jumlah Liter
                                        Per
                                        Botol </label>
                                    <input wire:model.lazy="liter_per_pack" required type="number"
                                           placeholder="Masukan Jumlah Liter" autocomplete="given-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Jumlah
                                        Botol</label>
                                    <input wire:model.lazy="quantity" required type="number" n
                                           placeholder="Masukkan Jumlah Botol" autocomplete="family-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                </div>
                                <div class="col-span-6 sm:col-span-3 flex items-center">

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
                                          <span class="text-sm font-medium text-gray-900">Sediakan Jasa Kurir</span>
                                        </span>

                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Agama
                                        (Opsional) </label>
                                    <input wire:model.lazy="agama" id="email-address" type="text"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="desc" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                    <textarea id="desc" wire:model.lazy="description" required rows="3"
                                              class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    <p class="mt-2 text-sm text-gray-500">Masukkan informasi terkait riwayat kesehatan,
                                        konsumsi obat-obatan yang sedang dikonsumsi, gaya hidup dan budaya Anda untuk
                                        membantu resipien mengetahui kondisi pendonor</p>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Alamat
                                        Lengkap</label>
                                    <textarea wire:model.lazy="detail_address" required rows="3"
                                              class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    <p class="mt-2 text-sm text-gray-500">Masukkan alamat lengkap pendonor</p>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Gambar Produk ASI
                                    </label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <input type="file" wire:model="product_picture">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Bukti Surat Vaksin Covid-19 (Minimal Tahap 1)
                                    </label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <input type="file" wire:model="bukti_foto_covid19">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="rounded-full text-lg bg-orange-dd inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-d">
                                Lakukan donasi
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
