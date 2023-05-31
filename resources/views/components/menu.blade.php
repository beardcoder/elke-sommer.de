<ul class="hidden items-stretch space-x-3 md:flex">
  @foreach ($links as $link)
    <li class="flex">
      <a href="{{ route('frontend.page', [$link->getRelated('page')->first()->slug]) }}"
        class="-mb-1 flex items-center border-b-2 border-black px-4">{{ $link->title }}</a>
    </li>
  @endforeach
</ul>

<button class="flex justify-end p-4 md:hidden">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
  </svg>
</button>
