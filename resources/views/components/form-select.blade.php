<div>
  <select {{ $attributes->merge(['class' => 'bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6']) }}>
    {{ $slot }}
  </select>
</div>
