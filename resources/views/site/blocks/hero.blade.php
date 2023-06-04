@php
  $image = TwillImage::make($block, 'cover');
  $image->preset([
      'crop' => 'default',
      'sizes' => '(max-width: 1023px) 100vw, (min-width: 1023px)',
      'sources' => [
          [
              'crop' => 'mobile',
              'width' => 420,
              'height' => 420,
              'media_query' => '(max-width: 420px)',
          ],
          [
              'crop' => 'default',
              'media_query' => '(min-width: 420px) and (max-width: 1023px)',
          ],
      ],
  ]);
@endphp

<section class="relative -mt-24 overflow-hidden pt-24">
  <div class="container relative mx-auto flex flex-col items-center px-4 py-8 md:px-10 lg:flex-row lg:px-0">
    <div class="z-10 lg:absolute lg:w-1/2">
      <h1 class="font-header text-4xl font-bold leading-none sm:text-4xl md:text-6xl">
        {!! $block->input('title') !!}
      </h1>
      <p class="mb-12 mt-8 max-w-md text-lg">
        {!! $block->input('text') !!}
      </p>
    </div>
    <div class="w-full rounded lg:ml-auto lg:w-2/3">
      {!! $image->render([
          'loading' => 'eager',
          'class' =>
              'aspect-[1/1] md:aspect-[16/10] lg:aspect-[16/10] lg:rounded-tl-10xl lg:rounded-br-10xl rounded-tl-5xl rounded-br-5xl',
      ]) !!}
    </div>
  </div>
</section>
