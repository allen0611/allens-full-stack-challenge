<x-layout>
  <x-slot:heading>
    Log In
  </x-slot:heading>

  <form method="POST" action="/login">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4 lg:grid-cols-6">
          <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" type="email" :value="old('email')" required />
              <x-form-error name="email" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
              <x-form-input name="password" id="password" type="password" required />
              <x-form-error name="password" />
            </div>
          </x-form-field>

          <div class="sm:col-span-2 mt-6 flex items-center justify-end gap-x-3">
            <a href="/jobs" class="flex rounded-md h-9 px-4 py-2 mt-auto text-sm font-semibold leading-6 transition-all hover:bg-black/30 dark:hover:bg-white/30">Cancel</a>
            <x-form-button type="submit">Log In</x-form-button>
          </div>
        </div>
      </div>
    </div>
  </form>
</x-layout>
