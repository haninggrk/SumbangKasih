

   @foreach($getAllAsiProductDashboardRequest as $DataAsiRequest)

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
                    {{$DataAsiRequest->name}}
                </div>
                <div class="text-sm text-gray-500">

                </div>
            </div>
        </div>
    </td>
    <td  class="px-6 py-4 whitespace-nowrap">{{$DataAsiRequest->city}}</td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$DataAsiRequest->quantity}} Botol</div>
        <div class="text-sm text-gray-500">{{$DataAsiRequest->liter_per_pack}} Liter /
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