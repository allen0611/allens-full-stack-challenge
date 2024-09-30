<x-layout>
  <x-slot:heading>
    Jobs Feed List
  </x-slot:heading>
    <div>
      <p>{{ $greeting }} {{ $company }} team!</p>

      <!-- Filter Form -->
      <form method="GET" action="/jobs" class="my-9">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6">
          <div>
            <label for="title" class="block text-sm font-medium leading-6 text-black dark:text-white">Job Title</label>
            <input type="text" name="title" id="title" value="{{ request('title') }}" class="bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-2" placeholder="Job title">
          </div>

          <div>
            <label for="location" class="block text-sm font-medium leading-6 text-black dark:text-white">Location</label>
            <input type="text" name="location" id="location" value="{{ request('location') }}" class="bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-2" placeholder="Location">
          </div>

          <div>
            <label for="salary" class="block text-sm font-medium leading-6 text-black dark:text-white">Salary</label>
            <div class="mt-2">
              <select name="salary" id="salary" class="bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="">Salary</option>
                <option value="60000" {{ request('salary') == 60000 ? 'selected' : '' }}>$60,000+</option>
                <option value="80000" {{ request('salary') == 80000 ? 'selected' : '' }}>$80,000+</option>
                <option value="100000" {{ request('salary') == 100000 ? 'selected' : '' }}>$100,000+</option>
                <option value="150000" {{ request('salary') == 150000 ? 'selected' : '' }}>$125,000+</option>
                <option value="150000" {{ request('salary') == 150000 ? 'selected' : '' }}>$150,000+</option>
                <option value="200000" {{ request('salary') == 200000 ? 'selected' : '' }}>$200,000+</option>
              </select>
            </div>
          </div>

          <div>
            <label for="company" class="block text-sm font-medium leading-6 text-black dark:text-white">Company</label>
            <input type="text" name="company" id="company" value="{{ request('company') }}" class="bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-2" placeholder="Company name">
          </div>

          <div>
            <label for="type" class="block text-sm font-medium leading-6 text-black dark:text-white">Job Type</label>
            <div class="mt-2">
              <select name="type" id="type" class="bg-white dark:bg-black block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="">All</option>
                <option value="remote" {{ request('type') == 'remote' ? 'selected' : '' }}>Remote</option>
                <option value="hybrid" {{ request('type') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                <option value="in-person" {{ request('type') == 'in-person' ? 'selected' : '' }}>In-Person</option>
              </select>
            </div>
          </div>

          <button type="submit" class="flex items-center justify-center rounded-md h-9 mt-auto px-4 py-2 text-[#FF2D20] hover:text-black dark:hover:text-white font-bold border solid border-[#FF2D20] bg-[#FF2D20]/10 hover:bg-[#FF2D20]/30 transition-all">Filter</button>
        </div>
      </form>

      <div class="group">
        <ul class="gap-3 pt-5 grid grid-flow-row-dense grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
          @foreach ($jobs as $job)
            <li>
              <a
                href="/jobs/{{ $job['id'] }}"
                class="relative flex flex-col justify-between h-full px-2 py-3 text-[#FF2D20] transition-all origin-center hover:scale-105 hover:bg-[#FF2D20]/15 focus:scale-105 focus:bg-[#FF2D20]/15 rounded-md border solid border-black/30 dark:border-white/30 opacity-100 group-hover:border-[#FF2D20]/10 hover:!opacity-100 focus:!opacity-100"
              >
                <span class="text-xs text-black dark:text-white">{{ $job['type'] }}</span>
                <span class="text-xl font-bold">{{ $job['title'] }}</span>
                <span class="text-sm font-bold text-black dark:text-white">{{ $job->employer->name }}</span>
                <span class="text-xs text-black dark:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg> 
                  {{ $job['location'] }}
                </span>
                <span class="text-xs text-black dark:text-white mt-3">{{ $job['salary'] }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      </div>

      <!-- Pagination Links -->
      <div class="pt-6">
        {{ $jobs->links() }}
      </div>
    </div>
</x-layout>
