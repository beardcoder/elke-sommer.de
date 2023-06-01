<section class="bg-neutral-100 py-16">
  <div class="container mx-auto">
    <div class="mx-auto p-4 text-center md:px-10 lg:max-w-5xl lg:px-32">
      <h1 class="font-header text-2xl font-bold leading-none sm:text-4xl">{{ $block->input('title') }}</h1>
      <p class="my-4 px-8">{{ $block->input('text') }}</p>
      <a href="{{ route('frontend.page', [$block->getRelated('linkPage')[0]->slug]) }}"
        class="inline-block rounded bg-primary-500 p-3 text-sm font-bold uppercase tracking-wide text-gray-900 text-white"
        target="_self">
        {{ $block->input('linkTitle') }}
      </a>
    </div>
  </div>
</section>
