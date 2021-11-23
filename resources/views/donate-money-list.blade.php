<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Donasi uang
        </h2>
    </x-slot>
    <section class="mt-4">
        <h1 class="font-semibold text-2xl text-gray-800 leading-tight mb-4">Silakan pilih kategori donasi: </h1>
        <ul role="list"
            class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8 xl:gap-y-8">
            @foreach(\App\Models\Category::all() as $category)
                <li class="relative">
                    <a href="{{route('donate-money.show', ['idKategori' => $category->id])}}">
                        <div
                            class="group block w-full aspect-w-10 aspect-h-3 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                            <img
                                src="{{asset('img/banner-category/' . $category->photo.".jpg")}}"
                                alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                            <span class="sr-only">Detail kategori {{$category->name}}</span>
                        </div>
                        <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Donasi
                            ke {{$category->name}}</p>
                        <p class="block text-sm font-medium text-gray-500 pointer-events-none">Klik untuk donasi
                            ke {{$category->name}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</x-app-layout>
