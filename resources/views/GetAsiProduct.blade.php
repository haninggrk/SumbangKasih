<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Asi') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-2 lg:grid-cols-7 gap-3">
        <div class="col-span-2">
    <h1 class="mb-5 font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Cari Donasi') }}
    </h1>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="ml-5 flow-root">
    <ul role="list" class="-mb-8">
      <li>
        <div class="relative pb-8">
          <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
          <div class="relative flex space-x-3">
            <div>
              <span class="h-8 w-8 rounded-full bg-orange-l flex items-center justify-center ring-8 ring-white">
                <!-- Heroicon name: solid/user -->
                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                </svg>
              </span>
            </div>
            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
              <div>
                <p class="text-sm text-gray-900 font-bold">ASI</p>
              </div>
              <div class="text-right text-sm whitespace-nowrap text-gray-500">
       
              </div>
            </div>
          </div>
        </div>
      </li>
  
      <li>
        <div class="relative pb-8">
         
          <div class="relative flex space-x-3">
            <div>
              <span class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center ring-8 ring-white">
                <!-- Heroicon name: solid/thumb-up -->
                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
            </div>
            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
              <div>
                <p class="text-sm text-gray-500">Dana
              </div>
              <div class="text-right text-sm whitespace-nowrap text-gray-500">
         
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
        </div>
        <div class="col-span-5">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="hidden md:flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  DATE
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  DONATUR
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  LOKASI
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  QUANTITY
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
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
                          <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
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
                    <td>Jawa Timur</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{$DataAsi->quantity}} Botol</div>
                      <div class="text-sm text-gray-500">{{$DataAsi->litre_quantity}} Liter / Botol</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="#" class="text-orangesa "><x-jet-button>Details</x-jet-button></a>
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
  



   
    </div>
    </div>

    </body>
</html>
</x-app-layout>