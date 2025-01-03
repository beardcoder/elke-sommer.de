<x-layout>
    @if (TwillAppSettings::get('homepage.popup.active'))
        <x-popup :block="TwillAppSettings::getGroupDataForSectionAndName('homepage', 'popup')" />
    @endif
    <header class="relative top-0 z-40 w-full p-4">
        <div class="container mx-auto flex h-16 justify-between">
            <a
                aria-label="Zur Startseite"
                class="flex items-center p-2"
                href="{{ route('frontend.home') }}"
                rel="noopener noreferrer"
                title="Zur Startseite"
            >
                <x-logo />
            </a>
            <x-menu />
        </div>
    </header>

    <main class="space-y-12">
        {!! $item->renderBlocks() !!}
    </main>

    <x-footer />
</x-layout>
