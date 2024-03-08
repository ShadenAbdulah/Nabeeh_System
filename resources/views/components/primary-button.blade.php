<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-[#6D6AB1] rounded-md font-semibold text-md text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
