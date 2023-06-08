<section class="bg-white dark:bg-gray-900">
  <div class="mx-auto grid max-w-screen-xl px-4 py-8 lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-0">
    <div class="mr-auto place-self-center lg:col-span-7">
      <h1
        class="mb-4 max-w-2xl font-header text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl">
        {{ $block->input('title') }}</h1>
      <p class="mb-6 max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
        {{ $block->input('text') }}</p>
    </div>
    <div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
      {!! TwillImage::make($block, 'cover')->crop('hero_small')->width(643)->height(482)->render() !!}
    </div>
  </div>
</section>
