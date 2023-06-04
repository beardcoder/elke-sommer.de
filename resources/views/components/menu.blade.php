<nav class="ml-auto hidden items-stretch space-x-3 md:flex">
  <ul class="hidden items-stretch space-x-3 md:flex">
    @foreach ($links as $link)
      <li class="flex">
        <a href="{{ route('frontend.page', [$link->getRelated('page')->first()->slug]) }}"
          class="-mb-1 flex items-center border-b-2 border-black px-4">{{ $link->title }}</a>
      </li>
    @endforeach
  </ul>
</nav>
<div x-data="{ isOpen: false }" @keydown.escape="isOpen = false">
  <nav x-show="isOpen" x-cloak class="fixed inset-0 bg-white" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95">
    <button x-on:click="isOpen=false" class="absolute right-4 top-4 flex justify-end p-4 md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <ul class="flex h-full flex-col items-center justify-center space-y-4">
      @foreach ($links as $link)
        <li class="flex">
          <a href="{{ route('frontend.page', [$link->getRelated('page')->first()->slug]) }}"
            class="text-3xl">{{ $link->title }}</a>
        </li>
      @endforeach
    </ul>
  </nav>
  <button x-on:click="isOpen=true" class="flex justify-end p-4 md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
  </button>
</div>
