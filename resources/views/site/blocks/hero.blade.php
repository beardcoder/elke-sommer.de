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

<section class="relative -mt-24 overflow-hidden pb-24 pt-24 md:pb-32 md:pt-32">
  <div class="absolute top-0 h-full w-full">
    {!! $image->render([
        'loading' => 'eager',
        'class' => 'aspect-[10/16] sm:aspect-[1/1] md:aspect-[16/10] lg:aspect-[16/10]',
    ]) !!}
  </div>
  <div class="container relative mx-auto flex max-w-7xl flex-col px-4 py-8 md:px-10 lg:px-32">
    <h1 class="font-header text-4xl font-bold leading-none sm:text-5xl lg:text-8xl">
      {!! $block->input('title') !!}
    </h1>
    <p class="mb-12 mt-8 max-w-md text-lg">
      {!! $block->input('text') !!}
    </p>
  </div>
</section>
