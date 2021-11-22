<div>
    <div
        class="mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
        <div class="flex items-center space-x-5 w-full">
            <img src="{{asset('img/banner-category/' . $category->photo)}}" alt="" class="h-48 w-full object-cover lg:h-48">
        </div>
    </div>

    <div
        class="mt-8 mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="space-y-6 lg:col-start-1 lg:col-span-2">
            <!-- Description list-->
            <section aria-labelledby="applicant-information-title">
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 id="applicant-information-title" class="text-lg leading-6 font-medium text-gray-900">
                            Informasi penggalangan dana
                        </h2>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Informasi mengenai penggalangan dana untuk kategori ini
                        </p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        {{$category->description}}
                    </div>
                    <div>
                        <a href="#"
                           wire:click.prevent="toggleDonationModal"
                           class="block bg-gray-50 text-sm font-medium text-gray-500 text-center px-4 py-4 hover:text-gray-700 sm:rounded-b-lg">Kirimkan
                            donasi</a>
                    </div>
                </div>
            </section>

            <!-- Comments-->
            <section aria-labelledby="notes-title">
                <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                    <div class="divide-y divide-gray-200">
                        <div class="px-4 py-5 sm:px-6">
                            <h2 id="notes-title" class="text-lg font-medium text-gray-900">Pesan</h2>
                        </div>
                        <div class="px-4 py-6 sm:px-6">
                            <ul role="list" class="space-y-8">
                                @foreach($this->getDonatorList()->get() as $donator)
                                    <li>
                                        <div class="flex space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full"
                                                     src="{{$this->displayAvatar($donator)}}"
                                                     alt="">
                                            </div>
                                            <div>
                                                <div class="text-sm">
                                                    <span
                                                        class="font-medium text-gray-900">@if($this->shouldDisplayName($donator)){{$donator->user->name}} @else
                                                            Anonim @endif</span>
                                                    <span
                                                        class="text-gray-500 ml-2">Donasi sebesar Rp{{number_format($donator->amount,2,",",".")}}</span>
                                                </div>
                                                <div class="mt-1 text-sm text-gray-700">
                                                    <p>{{$donator->message}}</p>
                                                </div>
                                                <div class="mt-2 text-sm space-x-2">
                                                    <button type="button"
                                                            class="text-gray-900 font-medium">{{$donator->created_at->diffForHumans()}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                        <div class="flex space-x-3">
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="group inline-flex items-start text-sm space-x-2 text-gray-500">
                                        <!-- Heroicon name: solid/question-mark-circle -->
                                        <x-heroicon-s-question-mark-circle
                                            class="flex-shrink-0 h-5 w-5 text-gray-400"/>
                                        <span>Berdonasi untuk mengirimkan pesan!</span>
                                    </div>
                                    <button type="button"
                                            wire:click="toggleDonationModal"
                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-d hover:bg-orange-d focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-d">
                                        Donasi sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Donatur terbaru</h2>

                <!-- Activity Feed -->
                <div class="mt-6 flow-root">
                    <ul role="list" class="space-y-8">
                        @foreach($this->getDonatorList()->get()->take(5) as $donator)
                            <li>
                                <div class="flex space-x-3">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full"
                                             src="{{$this->displayAvatar($donator)}}"
                                             alt="">
                                    </div>
                                    <div>
                                        <div class="text-sm">
                                            <span
                                                class="font-medium text-gray-900">@if($this->shouldDisplayName($donator)){{$donator->user->name}} @else
                                                    Anonim @endif</span>

                                        </div>
                                        <div class="mt-1 text-sm text-gray-700">
                                            Donasi sebesar Rp{{number_format($donator->amount,2,",",".")}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-6 flex flex-col justify-stretch">
                    <button type="button"
                            wire:click="toggleDonationModal"
                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-d hover:bg-orange-d focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-d">
                        Lakukan donasi
                    </button>
                </div>
            </div>
        </section>
    </div>

    <x-jet-dialog-modal wire:model="openDonationModal">
        <x-slot name="title">
            Donasi
        </x-slot>

        <x-slot name="content">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="rounded-md bg-blue-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/information-circle -->
                        <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3 flex-1 flex flex-col md:justify-between text-blue-700">
                        <h3 class="text-md font-semibold">Informasi: </h3>
                        <ul class="text-sm list-inside list-disc">
                            <li>
                                Pembayaran donasi anda akan ditangani oleh pihak ketiga (Midtrans)
                            </li>
                            <li>
                                Mohon lakukan donasi paling lambat 24 jam setelah mengisi formulir dibawah
                            </li>
                            <li>
                                Bila anda ingin melakukan pembayaran lain kali, anda dapat mengakses link pembayaran
                                melalui dashboard anda
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <form action="#" wire:submit.prevent="doDonation" class="mt-6 space-y-6"
                  x-data="{ on: @entangle('donatorData.anonymous') }">
                <div>
                    <x-jet-label for="inputAmountDonasi">Jumlah donasi</x-jet-label>
                    <x-jet-input id="inputAmountDonasi" type="number" class="mt-1 block w-full"
                                 wire:model.lazy="donatorData.amount"/>
                    <small for="inputAmountDonasi" class="mt-1 max-w-2xl text-sm text-gray-500">Minimal jumlah donasi
                        Rp10.000</small>
                </div>

                <div>
                    <x-jet-label for="inputPesan">Pesan</x-jet-label>
                    <textarea id="inputPesan" wire:model.lazy="donatorData.message" rows="3"
                              class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md"
                              placeholder="Tulis pesan"></textarea>
                    <small for="inputAmountDonasi" class="mt-1 max-w-2xl text-sm text-gray-500">Pesan akan ditampilkan
                        secara publik.
                        kami akan menghapus pesan yang melanggar peraturan. Anda tidak dapat mengubah pesan setelah
                        menulisnya.</small>
                </div>

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
                        <span class="text-sm font-medium text-gray-900">Buat donasi saya anonim</span>
                    </span>
                </div>
                <div class="mt-8 flex flex-col">
                    <button type="submit" wire:click="toggleDonationModal"
                            class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-d hover:bg-orange-d focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-d">
                        <x-heroicon-o-external-link class="h-5 w-5 mr-2"/>
                        <span>Lakukan pembayaran donasi!</span>
                    </button>
                    <small class="mt-2 text-sm text-gray-500 w-full text-center">Anda akan dirahkan ke midtrans</small>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('openDonationModal')" wire:loading.attr="disabled">
                Batalkan
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
