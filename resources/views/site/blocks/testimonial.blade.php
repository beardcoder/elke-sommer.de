<div class="swiper-slide" id="'block--{{ $block->id }}">
  <div class="px-16 pb-10">
    <figure class="mx-auto max-w-lg">
      <svg
        class="mx-auto mb-3 h-12 text-gray-400"
        viewBox="0 0 24 27"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
          fill="currentColor"
        />
      </svg>
      <blockquote>
        <div class="text-xl text-gray-900">{!! $block->input('text') !!}</div>
      </blockquote>

      <figcaption class="mt-6 flex items-center justify-center space-x-3">
        <div class="flex items-center">
          <div class="pr-3 text-lg font-bold text-gray-900">{!! $block->input('name') !!}</div>
        </div>
      </figcaption>
    </figure>
  </div>
</div>
