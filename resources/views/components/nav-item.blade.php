@props(['url' => '', 'active' => false, 'icon' => '', 'title' => ''])
<a href="{{$url}}"
   class="{{$active ? 'bg-gray-100 font-bold group flex items-center px-2 py-2 font-medium rounded-md' : 'text-gray-100 hover:bg-[#FBB040] hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md'}}">
    @if($active)
        <div class="text-gray-800 mr-3 flex-shrink-0 h-6 w-6">
            {{$icon}}
        </div>
    @else
        <div class="text-gray-100 group-hover:text-white mr-3 flex-shrink-0 h-6 w-6">
            {{$icon}}
        </div>
    @endif
   {{$title}}
</a>

