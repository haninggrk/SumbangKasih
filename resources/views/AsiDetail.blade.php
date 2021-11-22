<style>
    input:checked ~ .dot {
        transform: translateX(100%);
        background-color: white;
    }

    input:checked ~ .bgchecked {
        background-color: #FBB040;
    }

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Donasi') }}
        </h2>
    </x-slot>
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Informasi Produk Asi') }}
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
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                 alt="">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                Jane Cooper
                            </div>
                            <div class="text-sm text-gray-500">
                                <!--  -->
                                Tanggal Upload : {{date('d M Y',strtotime($getAsiProductDetail->created_at))}}
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
                                {{date('d M Y',strtotime($getAsiProductDetail->tanggal_melahirkan))}}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Jumlah
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
                                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa
                                consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit
                                nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing
                                reprehenderit deserunt qui eu.
                            </dd>
                        </div>
                        <div class="sm:col-span-3">
                            <div x-data="" class="flex items-center w-full">


                                <!-- INI FORMNYA YANG DIISI BELUM CSRDF-->


                                <form method="POST" class="my-0" action="#">
                                    <label for="toggleB" class="flex items-center cursor-pointer">
                                        <!-- toggle -->
                                        <div class="  relative">
                                            <!-- input -->
                                            <input onClick="askAlamat()" type="checkbox" name="courir" id="toggleB"
                                                   class="sr-only">
                                            <!-- line -->
                                            <div class="block bgchecked bg-gray-500 w-14 h-8 rounded-full"></div>
                                            <!-- dot -->
                                            <div
                                                class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                                        </div>
                                        <!-- label -->
                                        <div class="ml-3 text-grey-900 font-medium text-2xl">
                                            Kurir
                                        </div>
                                    </label>

                            </div>
                        </div>
                        <div x-show="" style="display:none;" id="formalamat" class="sm:col-span-2">
                            <dt class="text-sm font-mediu mb-2 text-gray-500">
                                Detail Alamat
                            </dt>
                            <x-jet-input class="w-full rounded-full p-2 px-3 text-md"
                                         placeholder="Alamat Lengkap"></x-jet-input>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-mediu mb-2 text-gray-500">
                                Jumlah
                            </dt>
                            <x-jet-input class="w-full rounded-full p-2 px-3 text-md"
                                         placeholder="Jumlah"></x-jet-input>
                        </div>

                        <div class="sm:col-span-3 text-right">
                            <x-jet-button class="rounded-full text-lg bg-orange-dd">Pesan</x-jet-button>
                        </div>
                        </form>


                        <!-- INI FORMNYA YANG DIISI BELUM CSRDF-->


                    </dl>
                </div>
            </div>
        </div>
    </div>
    <script>

        function askAlamat() {
            var formalamat = document.getElementById('formalamat').style.display;
            if (formalamat == 'none') {
                document.getElementById('formalamat').style.display = 'block';
            } else {
                document.getElementById('formalamat').style.display = 'none';
            }


        }
    </script>
</x-app-layout>
