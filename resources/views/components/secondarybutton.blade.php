<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center text-orange-d px-4 py-2 bg-white ring-inset ring-2 ring-orange-d border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-white hover:ring-white  hover:bg-yellow-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>

