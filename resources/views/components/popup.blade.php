@php
$image = $block->image('image');
@endphp

@push('scripts')
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
      const lastExecutionTime = sessionStorage.getItem('popup');
      const now = new Date().getTime();

      if (lastExecutionTime === null || now - lastExecutionTime > 300_000) {
        const modalEl = document.getElementById('popup');
        const popup = new Modal(modalEl, {
          placement: 'center'
        });

        sessionStorage.setItem('popup', now);
        popup.show();
      }
    })
  </script>
@endpush

<div
  id="popup"
  tabindex="-1"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
    <div class="relative bg-white rounded-md shadow overflow-hidden">
      <button
        type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center absolute top-2 right-2"
        data-modal-hide="popup"
      >
        <svg
          class="w-3 h-3"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 14 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
          />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <img src="{{ $image }}" alt="Popup" class="w-full h-auto" />
    </div>
  </div>
</div>
