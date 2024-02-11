<x-layout>
  @if (TwillAppSettings::get('homepage.homepage.wanderung'))
    <x-wanderung />
  @endif
  <header class="relative top-0 z-40 w-full p-4">
    <div class="container mx-auto flex h-16 justify-between">
      <a
        class="flex items-center p-2"
        href="{{ route('frontend.home') }}"
        title="Zur Startseite"
        aria-label="Zur Startseite"
        rel="noopener noreferrer"
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
