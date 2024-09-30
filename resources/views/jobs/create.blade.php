<x-layout>
  <x-slot:heading>
    Create a Job Post
  </x-slot:heading>

  <form method="POST" action="/jobs">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7">Job Post</h2>
        <p class="mt-1 mb-10 text-sm leading-6">This information will be displayed publicly so be careful what you share.</p>

        {{-- Example: Error Block --}}
        {{-- <div class="block mb-3 text-sm text-red-500 italic font-bold">
          @if ($errors->any())
            @foreach ($errors->all() as $error)
            <span>{{ $error }} </span>
            @endforeach
          @endif
        </div> --}}

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4 lg:grid-cols-8">
          <div class="sm:col-span-2">
            <label for="title" class="block text-sm font-medium leading-6">Job Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                <input type="text" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent py-1.5 px-3 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder={{ fake()->jobTitle() }} required>
              </div>

              @error('title')
                <span class="flex items-center block mt-2 text-sm text-red-500 italic font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM11.25 13.5V8.25H12.75V13.5H11.25ZM11.25 15.75V14.25H12.75V15.75H11.25Z" fill="#FF2D20"/>
                  </svg>
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="location" class="block text-sm font-medium leading-6">Location</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                <input type="text" name="location" id="location" autocomplete="location" class="block flex-1 border-0 bg-transparent py-1.5 px-3 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder={{ fake()->city() }} required>
              </div>

              @error('location')
                <span class="flex items-center block mt-2 text-sm text-red-500 italic font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM11.25 13.5V8.25H12.75V13.5H11.25ZM11.25 15.75V14.25H12.75V15.75H11.25Z" fill="#FF2D20"/>
                  </svg>
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="salary" class="block text-sm font-medium leading-6">Salary</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 px-3 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder={{ '$' . number_format(fake()->numberBetween(30, 290) * 1000) }} required>
              </div>

              @error('salary')
                <span class="flex items-center block mt-2 text-sm text-red-500 italic font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM11.25 13.5V8.25H12.75V13.5H11.25ZM11.25 15.75V14.25H12.75V15.75H11.25Z" fill="#FF2D20"/>
                  </svg>
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="type" class="block text-sm font-medium leading-6">Job Type</label>
            <div class="mt-2">
              <select name="type" id="type" class="bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                <option value="">Hybrid? Remote?</option>
                <option value="remote" {{ request('type') == 'remote' ? 'selected' : '' }}>Remote</option>
                <option value="hybrid" {{ request('type') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                <option value="in-person" {{ request('type') == 'in-person' ? 'selected' : '' }}>In-Person</option>
              </select>

              @error('type')
                <span class="flex items-center block mt-2 text-sm text-red-500 italic font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM11.25 13.5V8.25H12.75V13.5H11.25ZM11.25 15.75V14.25H12.75V15.75H11.25Z" fill="#FF2D20"/>
                  </svg>
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>

          <div class="col-span-full">
            <label for="description" class="block text-sm font-medium leading-6">Job Description</label>
            <div class="mt-2">
              <textarea id="description" name="description" rows="16" class="bg-transparent block w-full rounded-md border-0 px-3 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required></textarea>

              @error('description')
                <span class="flex items-center block mt-2 text-sm text-red-500 italic font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM11.25 13.5V8.25H12.75V13.5H11.25ZM11.25 15.75V14.25H12.75V15.75H11.25Z" fill="#FF2D20"/>
                  </svg>
                  {{ $message }}
                </span>
              @enderror
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6">Cancel</button>
      <button type="submit" class="flex items-center justify-center rounded-md h-9 mt-auto px-4 py-2 text-[#FF2D20] hover:text-black dark:hover:text-white font-bold border solid border-[#FF2D20] bg-[#FF2D20]/10 hover:bg-[#FF2D20]/30 transition-all">Create Job Post</button>
    </div>
  </form>
</x-layout>
