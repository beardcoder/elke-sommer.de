<div class="flex flex-col items-center mb-4" id="block--{{ $block->id }}">
  <h3 class="my-3 w-full md:text-center font-header text-3xl">{!! $block->input('title') !!}</h3>
  <div class="prose space-y-1 leading-snug">
    {!! $block->input('text') !!}
  </div>
</div>
