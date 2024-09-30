@props(['active' => false, 'desktopView' => true, 'type' => 'a', 'extra_classes' => false])

@if($type === 'a')
  <{{ $type }}
    {{ $attributes }}
    class="{{ $desktopView ? 'text-sm': 'block text-base' }} rounded-md px-3 py-2 font-medium {{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} {{ $extra_classes }}"
    aria-current="{{ $active ? 'page': 'false' }}"
  >
    {{ $slot }}
  </{{ $type }}>
@elseif ($type === 'button')
  <{{ $type }}
    {{ $attributes }}
    class="flex items-center justify-center rounded-md h-9 mt-auto px-4 py-2 text-[#FF2D20] hover:text-black dark:hover:text-white font-bold border solid border-[#FF2D20] bg-[#FF2D20]/10 hover:bg-[#FF2D20]/30 transition-all {{ $extra_classes }}"
  >
    {{ $slot }}
  </{{ $type }}>
@else
  <{{ $type }}
    {{ $attributes }}
    class="{{ $desktopView ? 'text-sm': 'block text-base' }} rounded-md px-3 py-2 font-medium {{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} {{ $extra_classes }}"
    aria-current="{{ $active ? 'page': 'false' }}"
  >
    {{ $slot }}
  </{{ $type }}>
@endif
