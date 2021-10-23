<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donasi') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Cari Donasi') }}
    </h1>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-5 lg:col-span-2">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="ml-5 hidden lg:flow-root">

            </div>
            <!--Mobile Navigation -->
            <div class="content-center grid lg:grid-cols-1 grid-cols-2 gap-4 sm:grid-cols-2">
                <div
                    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <div class="flex-shrink-0">
                        <svg class="p-2 h-10 w-10 bg-orangesa rounded-full text-white"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path
                                d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <button class="text-left" wire:click="setPage('asi')" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-extrabold text-gray-900">
                                ASI
                            </p>
                            <p class="text-sm hidden md:block text-gray-500 truncate">
                                Cari Asi Disini
                            </p>
                        </button>
                    </div>

                </div>
                <div
                    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <div class="flex-shrink-0">
                        <svg class="p-2 h-10 w-10 bg-orangesa rounded-full text-white"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path
                                d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <button class="text-left" wire:click="setPage('dana')" class="focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-extrabold text-gray-900">
                                Dana
                            </p>
                            <p class="hidden md:block text-sm text-gray-500 truncate">
                                Cari Dana Disini
                            </p>
                        </button>
                    </div>

                </div>


                <!-- More people... -->
            </div>


        </div>
        @if($page == 'asi')
            <div class="col-span-5">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div style="" class="overflow-y-scroll overflow-x-hidden hidden lg:flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 md:px-0 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            DATE
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            DONATUR
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            LOKASI
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            QUANTITY
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ACTION
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach($getAllAsiProduct as $DataAsi)

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{$DataAsi->created_at->format('m/d/y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                             alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{DB::table('users')->find($DataAsi->user_id)->name}}
                                                        </div>
                                                        <div class="text-sm text-gray-500">

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td  class="px-6 py-4 whitespace-nowrap">Jawa Timur</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$DataAsi->quantity}} Botol</div>
                                                <div class="text-sm text-gray-500">{{$DataAsi->litre_quantity}} Liter /
                                                    Botol
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                <a href="#" class="text-orangesa ">
                                                    <x-jet-button>Details</x-jet-button>
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <ul role="list" class="grid lg:hidden grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($getAllAsiProduct as $DataAsi)
                        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="w-full flex items-center justify-between p-6 space-x-6">
                                <div class="flex-1 truncate">
                                    <div class="flex items-center space-x-3">
                                        <h3 class="text-gray-900 text-sm font-medium truncate">{{DB::table('users')->find($DataAsi->user_id)->name}}</h3>
                                        @if(rand(1,2) == 1)

                                        @else
                                            <span
                                                class="flex-shrink-0 inline-block px-2 py-0.5 text-white text-xs font-medium bg-orangesa rounded-full">Antar</span>
                                        @endif
                                    </div>
                                    <p class="mt-1 text-gray-500 text-sm truncate">{{rand(1,2)==1?"Ponorogo":"Surabaya"}}</p>
                                    <p class="mt-1 text-gray-900 text-sm truncate"><span
                                            class="font-bold">{{$DataAsi->quantity}}</span> Botol (<span
                                            class="font-bold">{{$DataAsi->litre_quantity}} </span>Liter/Botol)</p>
                                </div>
                                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                     alt="">
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="w-0 flex-1 flex">
                                        <a href="mailto:janecooper@example.com"
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
                @endforeach
                <!-- More people... -->
                </ul>
            </div>
        @else
        <!-- Taruh kode dana disini -->
        @endif

    </div>
</div>
