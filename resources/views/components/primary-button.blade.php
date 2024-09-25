<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#301934] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#2b1530] focus:bg-[#2b1530] active:bg-[#1f0f23] focus:outline-none focus:ring-2 focus:ring-[#301934] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

