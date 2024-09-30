<x-layout>
  <x-slot:heading>
    Job Post
  </x-slot:heading>

  <span class="text-sm">{{ $job->type }}</span>

  {{-- <p class="font-bold text-lg">{{ $job->company }}</p> --}}

  <p class="font-bold text-lg">{{ $job->employer->name }}</p>

  <h2 class="font-bold text-3xl">{{ $job->title }}</h2>

  <span class="text-sm flex items-center mb-7"> <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
  </svg> {{ $job->location }}</span>

  <p class="mb-3">
    This opportunity pays {{ $job->salary }} per year.
  </p>

  @foreach(explode("\n\n", $job->description) as $paragraph)
    <p class="mb-3">{{ $paragraph }}</p>
  @endforeach

  <p class="mb-6">
    <a
      href="/jobs/{{ $job->id }}/edit"
      class="inline-flex items-center justify-center rounded-md h-9 mt-auto px-4 py-2 text-[#FF2D20] hover:text-black dark:hover:text-white font-bold border solid border-[#FF2D20] bg-[#FF2D20]/10 hover:bg-[#FF2D20]/30 transition-all"
    >
      Edit Job Post
    </a>
  </p>
</x-layout>
