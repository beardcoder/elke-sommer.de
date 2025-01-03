<div class="mb-4 flex flex-col items-center" id="block--{{ $block->id }}">
    <h3 class="my-3 w-full font-header text-3xl md:text-center">{!! $block->input('title') !!}</h3>
    <div class="prose space-y-1 leading-snug">
        {!! $block->input('text') !!}
    </div>
</div>
