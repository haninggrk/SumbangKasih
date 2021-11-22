<div>
@if($fundStatus === 0)
    <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-green-800">
                        Ajukan dana ke Sumbang Asih
                    </h3>
                    <div class="mt-2 text-sm text-green-700">
                        <p>
                            Perlu bantuan dana? Ajukan diri ke Sumbang Asih! Mohon isi formulir di bawah, lalu tunggu
                            konfirmasi dari kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form wire:submit.prevent="registerForFund" class="space-y-4">
                <div>
                    <x-jet-label for="nik" value="NIK anda"/>
                    <x-jet-input id="nik" type="text" class="mt-1 block w-full" wire:model.lazy="state.nik"/>
                    <x-jet-input-error for="state.nik" class="mt-2"/>
                </div>

                <div>
                    <x-jet-label for="occupancy" value="Pekerjaan anda"/>
                    <select id="occupancy" wire:model="state.occupancy"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option value="umum">Masyarakat Umum</option>
                        <option value="mahasiswa">Pelajar / Mahasiswa</option>
                        <option value="kesehatan">Tenaga Kesehatan</option>
                    </select>
                    <x-jet-input-error for="state.occupancy" class="mt-2"/>
                </div>

                <div>
                    <x-jet-label for="category" value="Kategori yang ingin diajukan"/>
                    <select id="category" wire:model="state.category"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="state.category" class="mt-2"/>
                </div>

                @if($state['occupancy'] === 'mahasiswa')
                    <div>
                        <x-jet-label for="npm" value="NPM / Nomor pelajar anda"/>
                        <x-jet-input id="npm" type="text" class="mt-1 block w-full" wire:model.lazy="state.npm"/>
                        <x-jet-input-error for="state.npm" class="mt-2"/>
                    </div>
                @endif

                @if($state['occupancy'] === 'kesehatan')
                    <div>
                        <x-jet-label for="str" value="Surat Tanda Registrasi"/>
                        <x-jet-input id="str" type="text" class="mt-1 block w-full" wire:model.lazy="state.str"/>
                        <x-jet-input-error for="str" class="mt-2"/>
                    </div>
                @endif
                <div class="relative flex items-start">
                    <div class="flex items-center h-5">
                        <input id="agree" wire:model="state.agree" type="checkbox"
                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="agree" class="font-medium text-gray-700">Data yang saya berikan diatas adalah benar
                            adanya</label>
                    </div>
                </div>
                <x-jet-input-error for="state.agree" class="mt-2"/>
                <x-jet-button type="submit" class="mt-4">Ajukan bantuan dana</x-jet-button>
            </form>
        </div>
    @endif

    @if($fundStatus === 1)
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-green-800">
                        Anda sudah pernah mengajukan sumbangan dana ke Sumbang Asih
                    </h3>
                    <div class="mt-2 text-sm text-green-700">
                        <p>
                            Silakan tunggu konfirmasi dari kami terhadap permohonan anda. Kami akan menghubungi anda untuk memverifikasi data yang anda isi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
