<x-partials.blocks.wrapper class="bg-white" id="'block--{{ $block->id }}">
  <div class="mx-auto grid max-w-screen-xl px-4 py-8 lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-0">
    <div class="mr-auto place-self-center md:col-span-6 lg:col-span-7">
      <h1
        class="text-primary-500 mb-4 max-w-2xl font-header text-4xl tracking-tight md:text-5xl md:leading-none xl:text-6xl"
      >
        {!! $block->input('title') !!}
      </h1>

      @if ($block->input('text'))
        <p class="mb-6 max-w-2xl font-light text-gray-500 md:text-lg lg:mb-8 lg:text-xl">
          {!! $block->input('text') !!}
        </p>
      @endif
    </div>
    <div class="lg:col-span-5 md:col-span-6 lg:mt-0 lg:flex">
      {!! TwillImage::make($block, 'cover_small')->crop('default')->width(640)->height(480)->render([
              'loading' => 'eager',
              'layout' => 'constrained',
              'class' => 'lg:rounded-tl-10xl lg:rounded-br-10xl rounded-tl-5xl rounded-br-5xl'
          ]) !!}
    </div>
  </div>
</x-partials.blocks.wrapper>
