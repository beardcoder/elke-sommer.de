<div class="flex flex-col items-center p-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-8 w-8">
    <path fill-rule="evenodd"
      d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
      clip-rule="evenodd"></path>
  </svg>
  <h3 class="my-3 w-full text-center font-header text-2xl font-semibold">{!! $block->input('title') !!}</h3>
  <div class="format space-y-1 leading-snug">
    {!! $block->input('text') !!}
  </div>
</div>
