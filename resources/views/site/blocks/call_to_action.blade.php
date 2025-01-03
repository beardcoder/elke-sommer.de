<x-partials.blocks.wrapper class="bg-neutral-100" id="block--{{ $block->id }}">
    <div class="container mx-auto py-8">
        <div class="mx-auto p-4 text-center md:px-10 lg:max-w-5xl lg:px-32">
            <h2 class="font-header text-4xl lg:text-5xl">{{ $block->input('title') }}</h2>
            <p class="my-4 px-8">{{ $block->input('text') }}</p>
            @if ($block->getRelated('linkPage')->isNotEmpty())
                <a
                    class="inline-block rounded bg-primary-500 p-3 text-sm font-bold uppercase tracking-wide text-white"
                    href="{{ route('frontend.page', [$block->getRelated('linkPage')[0]->slug]) }}#{{ $block->input('linkAnchor') }}"
                    target="_self"
                >
                    {{ $block->input('linkTitle') }}
                </a>
            @else
                <a
                    class="inline-block rounded bg-primary-500 p-3 text-sm font-bold uppercase tracking-wide text-white"
                    href="{{ url()->current() }}#{{ $block->input('linkAnchor') }}"
                    target="_self"
                >
                    {{ $block->input('linkTitle') }}
                </a>
            @endif
        </div>
    </div>
</x-partials.blocks.wrapper>
