@if ($paginator->hasPages())
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
    <div class="flex justify-between flex-1 sm:hidden">
      @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:border-gray-600">
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
          {!! __('pagination.previous') !!}
        </a>
      @endif

      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
          {!! __('pagination.next') !!}
        </a>
      @else
        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:border-gray-600">
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
      <div>
        <p class="flex gap-0.5 items-end text-sm text-gray-700 leading-5 dark:text-gray-400">
          {{-- {!! __('Showing') !!} --}}
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-1" viewBox="0 0 512 512">
            <g>
              <path style="fill:currentColor;" d="M0,145.217v336.004h512V145.217H0z M480,252.929h-78.658v32.001H480v164.292H32V284.93h78.666v-32.001H32   v-75.711H480V252.929z"/>
              <path style="fill:currentColor;" d="M215.558,79.528c10.398-10.375,24.598-16.742,40.442-16.75c15.844,0.007,30.043,6.374,40.441,16.75   c10.376,10.399,16.747,24.594,16.755,40.454h32C345.189,70.7,305.263,30.785,256,30.778c-49.266,0.007-89.189,39.922-89.197,89.204   h32C198.812,104.122,205.183,89.927,215.558,79.528z"/>
              <rect x="329.337" y="240.452" style="fill:currentColor;" width="48.004" height="64.001"/>
              <rect x="206.668" y="252.929" style="fill:currentColor;" width="98.669" height="32.001"/>
              <rect x="134.667" y="240.452" style="fill:currentColor;" width="48" height="64.001"/>
            </g>
          </svg>
          @if ($paginator->firstItem())
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
              {!! __('-') !!}
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
          @else
            {{ $paginator->count() }}
          @endif
          {!! __('of') !!}
            <span class="font-medium">{{ $paginator->total() }}</span>
          {!! __('jobs') !!}
        </p>
      </div>

      <div>
        <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
          {{-- Previous Page Link --}}
          @if ($paginator->onFirstPage())
            <span aria-hidden="true">
              <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 border border-gray-300 cursor-default rounded-l-md leading-5 dark:border-gray-600" aria-hidden="true">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 border border-gray-300 rounded-l-md leading-5 hover:text-gray-400 hover:bg-gray-400/20 focus:bg-gray-400/20 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.previous') }}">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </a>
          @endif

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <span aria-hidden="true">
                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 border border-gray-300 cursor-default leading-5 dark:border-gray-600 dark:text-gray-400">{{ $element }}</span>
              </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 border border-gray-300 cursor-default leading-5 dark:border-gray-600">{{ $page }}</span>
                  </span>
                @else
                  <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 border border-gray-300 leading-5 hover:text-gray-500 hover:bg-gray-400/20 focus:bg-gray-400/20 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:border-gray-600 dark:text-gray-400 dark:hover:text-gray-300 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Next Page Link --}}
          @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 hover:bg-gray-400/20 focus:bg-gray-400/20 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.next') }}">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </a>
          @else
            <span aria-hidden="true">
              <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 border border-gray-300 cursor-default rounded-r-md leading-5 dark:border-gray-600" aria-hidden="true">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          @endif
        </span>
      </div>
    </div>
  </nav>
@endif
