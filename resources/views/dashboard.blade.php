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
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
            Statistik anda
        </h3>

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

    <section class="mt-4">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
            Riwayat donasi anda
        </h3>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    @if(\App\Models\Donation::where('user_id', auth()->user()->id)->get()->count() > 0)
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah donasi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach(\App\Models\Donation::where('user_id', auth()->user()->id)->get() as $donation)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                Rp{{number_format($donation->amount,2,",",".")}}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @switch($donation->payment_status)
                                                @case(1)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                          Menunggu pembayaran
                                                        </span>
                                                @break

                                                @case(2)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                          Diterima
                                                        </span>
                                                @break

                                                @case(3)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                          Kadaluarsa
                                                        </span>
                                                @break
                                            @endswitch
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($donation->payment_status == 1)
                                                <a href="{{$donation->payment_url}}">
                                                    <x-jet-button>Selesaikan pembayaran</x-jet-button>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    @else
                    <!-- This example requires Tailwind CSS v2.0+ -->
                        <a href="{{route('donate-money.index')}}" type="button"
                           class="relative block w-full border-2 border-gray-300 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <x-heroicon-o-credit-card class="mx-auto h-12 w-12 text-gray-400"/>
                            <span class="mt-2 block text-sm font-medium text-gray-900">
                                   Donasi sekarang
                                </span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
            Artikel
        </h3>
        <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            <li class="relative">
                <div
                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                    <img
                        src="https://akcdn.detik.net.id/community/media/visual/2021/07/12/ibu-menyusui-1_169.jpeg?w=700&q=90"
                        alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                    <a href="https://health.detik.com/berita-detikhealth/d-5752563/apakah-ibu-menyusui-boleh-vaksin-catat-ketentuannya-di-sini?_ga=2.192575658.1053611776.1637575093-1688744199.1636536737"
                       class="absolute inset-0 focus:outline-none">
                        <span class="sr-only">Apakah Ibu Menyusui Boleh Vaksin? Catat
                        Ketentuannya di Sini!</span>
                    </a>
                </div>
                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Apakah Ibu Menyusui
                    Boleh Vaksin? Catat Ketentuannya di Sini!</p>
                <p class="block text-sm font-medium text-gray-500 pointer-events-none">Program vaksinasi di Indonesia
                    masih terus berjalan. Pelaksanaan
                    vaksinasi pun harus mengikuti petunjuk teknis yang dikeluarkan oleh Kemenkes. Tapi apakah
                    ibu menyusui boleh vaksin COVID-19?</p>
            </li>

            <li class="relative">
                <div
                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                    <img
                        src="https://akcdn.detik.net.id/community/media/visual/2021/08/20/ilustrasi-susu-sapi.jpeg?w=700&q=90"
                        alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                    <a href="https://www.detik.com/edu/detikpedia/d-5806736/mengapa-susu-berwarna-putih-ini-kata-pakar-ipb"
                       class="absolute inset-0 focus:outline-none">
                        <span class="sr-only">Apakah Ibu Menyusui Boleh Vaksin? Catat
                        Ketentuannya di Sini!</span>
                    </a>
                </div>
                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Susu Berwarna Putih
                    ini Kata Pakar IPB</p>
                <p class="block text-sm font-medium text-gray-500 pointer-events-none">Pernah terpikirkan mengapa susu
                    berwarna putih? Bukan
                    warna lain seperti minuman berwarna yang sering kita minum atau bening seperti air. Ternyata
                    ada sebabnya lho mengapa susu bisa berwarna putih</p>
            </li>

            <li class="relative">
                <div
                    class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                    <img
                        src="https://lifepack.id/wp-content/uploads/2020/10/peran-dokter-pandemi-1-768x512.jpg"
                        alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                    <a href="https://lifepack.id/peran-penting-dokter-dan-layanan-telemedik-saat-pandemi/"
                       class="absolute inset-0 focus:outline-none">
                        <span class="sr-only">Apakah Ibu Menyusui Boleh Vaksin? Catat
                        Ketentuannya di Sini!</span>
                    </a>
                </div>
                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Peran Penting
                    Dokter dan Layanan
                    Telemedik Saat Pandemi</p>
                <p class="block text-sm font-medium text-gray-500 pointer-events-none">Pemanfaatan layanan kesehatan
                    digital berwujud
                    telehealth bisa menjadi bagian dari upaya mengubah kondisi pandemi COVID-19 menjadi
                    endemi</p>
            </li>
        </ul>
    </section>

</x-app-layout>
