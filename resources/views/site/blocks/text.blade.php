<x-partials.blocks.wrapper id="'block--{{ $block->id }}">
  <div class="container format mx-auto my-6 max-w-3xl space-y-2 p-4 lg:format-lg">
    {!! $block->input('html') !!}
  </div>
</x-partials.blocks.wrapper>
