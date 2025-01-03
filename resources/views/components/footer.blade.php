<footer class="mt-24 bg-gray-800 px-4 py-8 text-gray-400">
    <div class="container mx-auto flex flex-wrap items-center justify-center space-y-4 sm:justify-between sm:space-y-0">
        <div class="flex w-full flex-col items-center space-y-4 pr-3 md:flex-row md:space-y-0">
            <div class="mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center text-white">
                <x-sign />
            </div>

            <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
                @foreach ($links as $link)
                    <li class="flex">
                        <a href="{{ route('frontend.page', [$link->slug]) }}">{{ $link->title }}</a>
                    </li>
                @endforeach
            </ul>

            <ul class="flex flex-wrap space-x-4 sm:space-x-8 md:ml-auto">
                @foreach ($social_links as $link)
                    <li>
                        <a
                            href="{{ $link->input('url') }}"
                            rel="noopener noreferrer"
                            target="_blank"
                        >{{ $link->input('title') }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
