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

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4 lg:grid-cols-8">
          <x-form-field>
            <x-form-label for="title">Job Title</x-form-label>
            <div class="mt-2">
              <x-form-input name="title" id="title" placeholder="{{ fake()->jobTitle() }}" required />
              <x-form-error name="title" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="location">Location</x-form-label>
            <div class="mt-2">
              <x-form-input name="location" id="location" placeholder="{{ fake()->city() }}" required />
              <x-form-error name="location" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="salary">Salary</x-form-label>
            <div class="mt-2">
              <x-form-input name="salary" id="salary" placeholder="{{ '$' . number_format(fake()->numberBetween(30, 290) * 1000) }}" required />
              <x-form-error name="salary" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="type">Job Type</x-form-label>
            <div class="mt-2">
              <x-form-select name="type" id="type" required>
                <option value="">Hybrid? Remote?</option>
                <option value="remote" {{ request('type') == 'remote' ? 'selected' : '' }}>Remote</option>
                <option value="hybrid" {{ request('type') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                <option value="in-person" {{ request('type') == 'in-person' ? 'selected' : '' }}>In-Person</option>
              </x-form-select>
              <x-form-error name="type" />
            </div>
          </x-form-field>

          <div class="col-span-full">
            <x-form-label for="description">Job Description</x-form-label>
            <div class="mt-2">
              <x-form-textarea id="description" name="description" rows="16" required />
              <x-form-error name="description" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <x-form-button type="button" overrideClass="text-sm font-semibold leading-6">Cancel</x-form-button>
      <x-form-button type="submit">Create Job Post</x-form-button>
    </div>
  </form>
</x-layout>
