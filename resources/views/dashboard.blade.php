<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section aria-labelledby="profile-overview-title">
        <div class="rounded-lg bg-white overflow-hidden shadow">
            <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
            <div class="bg-white p-6">
                <div class="flex items-center justify-between">
                    <div class="sm:flex sm:space-x-5">
                        <div class="flex-shrink-0">
                            <img class="mx-auto h-20 w-20 rounded-full" src="{{Auth::user()->profile_photo_url}}"
                                 alt="">
                        </div>
                        <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                            <p class="text-sm font-medium text-gray-600">Selamat datang,</p>
                            <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{Auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-2  gap-3 sm:mt-0">
                        <div class="col-span-2 md:col-span-1 w-full">
                        <a href="{{route('profile.show')}}"
                           class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Edit profile
                        </a>
                        </div>
                        <div class="col-span-2 md:col-span-1 w-full">
                        @if(Auth::user()->user_type !== 2 || !Auth::user()->user_type !== 99)
                            <a href="{{route('register-fund')}}"
                               class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Ajukan bantuan dana
                            </a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <section class="mt-4">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Statistik anda
        </h3>
        @if(Auth::user()->user_type === 1)
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Jumlah Donasi
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        {{Auth::user()->donations()->count()}}
                    </dd>
                </div>

                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Donasi
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        {{Auth::user()->donations()->sum('amount')}}
                    </dd>
                </div>
                @endif

                <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Produk ASI yang Didonasikan
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        {{Auth::user()->asiProducts->count()}}
                    </dd>
                </div>
            </dl>
    </section>

</x-app-layout>
