<x-partials.blocks.wrapper id="block--{{ $block->id }}">
    <div class="container mx-auto mb-8 md:text-center">
        <h2 class="font-header text-4xl lg:text-5xl">{!! $block->input('title') !!}</h2>
    </div>
    <div class="container mx-auto grid justify-center gap-8 sm:grid-cols-2 md:gap-16 lg:grid-cols-3">
        @foreach ($block->children as $child)
            @include('site.blocks.stats_item', [
                'block' => $child,
            ])
        @endforeach
    </div>
</x-partials.blocks.wrapper>
