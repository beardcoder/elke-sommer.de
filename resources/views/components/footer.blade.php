<footer class="mt-24 bg-gray-800 px-4 py-8 text-gray-400">
  <div class="container mx-auto flex flex-wrap items-center justify-center space-y-4 sm:justify-between sm:space-y-0">
    <div class="flex flex-row space-x-4 pr-3 sm:space-x-8">
      <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center text-white">
        <x-sign />
      </div>
      <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
        @foreach ($links as $link)
          <li class="flex">
            <a href="{{ route('frontend.page', [$link->slug]) }}">{{ $link->title }}</a>
          </li>
      </ul>
      @endforeach
    </div>
    <ul class="flex flex-wrap space-x-4 pl-3 sm:space-x-8">
      @foreach ($social_links as $link)
        <li>
          <a rel="noopener noreferrer" target="_blank" href="{{ $link->input('url') }}">{{ $link->input('title') }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</footer>
