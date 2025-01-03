<nav class="ml-auto hidden items-stretch space-x-3 md:flex">
    <ul class="hidden items-stretch space-x-3 md:flex">
        @foreach ($links as $link)
            <li class="flex">
                <a class="-mb-1 flex items-center border-b-2 border-black px-4"
                    href="{{ route('frontend.page', [$link->getRelated('page')->first()->slug]) }}"
                >{{ $link->title }}</a>
            </li>
        @endforeach
    </ul>
</nav>
<div @keydown.escape="isOpen = false" x-data="{ isOpen: false }">
    <nav
        class="fixed inset-0 bg-white"
        x-cloak
        x-show="isOpen"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter="transition ease-out duration-300"
        x-transition:leave-end="opacity-0 scale-95"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
    >
        <button
            class="absolute right-4 top-4 flex justify-end p-4 md:hidden"
            title="Open Menu"
            x-on:click="isOpen=false"
        >
            <svg
                class="h-6 w-6"
                fill="none"
                stroke-width="1.5"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M6 18L18 6M6 6l12 12"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
            <span class="sr-only">Menü</span>
        </button>
        <ul class="flex h-full flex-col items-center justify-center space-y-4">
            @foreach ($links as $link)
                <li class="flex">
                    <a class="text-3xl"
                        href="{{ route('frontend.page', [$link->getRelated('page')->first()->slug]) }}">{{ $link->title }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    <button class="flex justify-end p-4 md:hidden" x-on:click="isOpen=true">
        <svg
            class="h-6 w-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M4 6h16M4 12h16M4 18h16"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
            ></path>
        </svg>
    </button>
</div>
