@php
    $image = TwillImage::make($block, 'text_image');
    $image->preset([
        'crop' => 'default',
        'sizes' => '(max-width: 1023px) 100vw, (min-width: 1023px)',
        'width' => 512,
        'sources' => [
            [
                'crop' => 'default',
                'width' => 420,
                'media_query' => '(max-width: 420px)'
            ],
            [
                'crop' => 'default',
                'width' => 512,
                'media_query' => '(min-width: 420px) and (max-width: 1023px)'
            ]
        ]
    ]);

    $imageOrder = 'order-2';
    $textOrder = 'order-1';
    if ($block->input('position') && $block->input('position') === 'left') {
        $imageOrder = 'order-1';
        $textOrder = 'order-2';
    }
@endphp

<x-partials.blocks.wrapper id="{{ $block->id }}">
    <div class="mx-auto max-w-screen-xl items-center gap-16 md:grid md:grid-cols-2">
        <div class="{{ $textOrder }} flex flex-col items-start font-light">
            @if ($block->input('text'))
                <div class="format lg:format-lg mb-4">
                    {!! $block->wysiwyg('text') !!}
                </div>
            @endif
        </div>
        @if ($block->hasImage('text_image', 'default'))
            <div class="{{ $imageOrder }} mt-8 gap-4">
                <div>
                    {!! $image->render() !!}
                </div>
            </div>
        @endif
    </div>
</x-partials.blocks.wrapper>
