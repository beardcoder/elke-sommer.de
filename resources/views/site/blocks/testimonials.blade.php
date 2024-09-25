<x-partials.blocks.wrapper id="{{ $block->id }}">
  <div class="mx-auto max-w-screen-md">
    @if ($block->input('title'))
      <div class="container mx-auto my-6 space-y-2 p-4 text-center">
        <h2 class="font-header text-4xl lg:text-5xl">{!! $block->input('title') !!}</h2>
        @if ($block->input('description'))
          <p class="mb-8 font-light text-gray-500 sm:text-xl lg:mb-16 dark:text-gray-400">
            {!! $block->input('description') !!}
          </p>
        @endif
      </div>
    @endif
    <div class="testimonials swiper">
      <div class="swiper-wrapper">
        @foreach ($block->children as $child)
          @include('site.blocks.testimonial', [
              'block' => $child
          ])
        @endforeach
      </div>
      <div class="swiper-pagination"></div>

      <div class="swiper-button-prev !text-primary-500"></div>
      <div class="swiper-button-next !text-primary-500"></div>
    </div>
  </div>
</x-partials.blocks.wrapper>
