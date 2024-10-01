@props([
    'type' => 'submit',
    'overrideClass' => null, // null by default, meaning no override
])

<button {{ $attributes->merge(['class' => $overrideClass ?: 'flex items-center justify-center rounded-md h-9 mt-auto px-4 py-2 text-[#FF2D20] hover:text-black dark:hover:text-white font-bold border solid border-[#FF2D20] bg-[#FF2D20]/10 hover:bg-[#FF2D20]/30 transition-all', 'type' => $type]) }}>
    {{ $slot }}
</button>
