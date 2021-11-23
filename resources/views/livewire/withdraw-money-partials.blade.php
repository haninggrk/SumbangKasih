<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="space-y-4">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6 w-full flex justify-between">
                <div>
                    <h1 class="font-bold text-gray-400 text-md">Saldo sumbangan anda</h1>
                    <span
                        class="text-lg text-gray-800 font-bold">Rp{{number_format(auth()->user()->receiverInfo->wallet,2,",",".")}}</span>
                </div>
                <x-jet-button wire:click="$toggle('openWithdrawModal')">Tarik dana</x-jet-button>
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
            <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Histori penarikan dana
                </h3>
            </div>
            <div class="px-4 py-5 sm:p-6">

            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="openWithdrawModal">
        <x-slot name="title">
            Tarik dana
        </x-slot>

        <x-slot name="content">

            <form action="#" wire:submit.prevent="withdrawMoney" class="mt-6 space-y-6">
                <div>
                    <x-jet-label for="amount">Jumlah yang ingin ditarik</x-jet-label>
                    <x-jet-input id="amount" type="number" class="mt-1 block w-full"
                                 wire:model.lazy="withdrawAmount"/>
                    <small for="amount" class="mt-1 max-w-2xl text-sm text-gray-500">Pastikan dana yang ingin ditarik
                        tidak lebih dari jumlah saldo anda</small>
                </div>
                <div>
                    <x-jet-label for="inputPesan">Pesan</x-jet-label>
                    <textarea id="inputPesan" wire:model.lazy="message" rows="3"
                              class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md"
                              placeholder="Tulis pesan"></textarea>
                    <small for="inputPesan" class="mt-1 max-w-2xl text-sm text-gray-500">Tulis deskripsi sedetail
                        mungkin mengenai penggunaan dana. Jangan lupa cantumkan nomor rekening beserta bank tujuan
                        pengiriman saldo</small>
                </div>
                <div class="mt-8 flex flex-col">
                    <button type="submit" wire:click="toggleDonationModal"
                            class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-d hover:bg-orange-d focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-d">
                        <x-heroicon-o-credit-card class="h-5 w-5 mr-2"/>
                        <span>Tarik donasi!</span>
                    </button>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('openWithdrawModal')" wire:loading.attr="disabled">
                Batalkan
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
