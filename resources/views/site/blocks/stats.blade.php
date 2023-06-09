<section class="py-6">
  <div class="container mx-auto my-6 space-y-2 p-4 text-center">
    <h2 class="font-header text-4xl font-bold lg:text-5xl">{!! $block->input('title') !!}</h2>
  </div>
  <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($block->children as $child)
      @include('site.blocks.stats_item', [
          'block' => $child,
      ])
    @endforeach
  </div>
</section>
