@push('scripts')
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
      const lastExecutionTime = sessionStorage.getItem('wanderung.popup');
      const now = new Date().getTime();

      if (lastExecutionTime === null || now - lastExecutionTime > 300_000) {
        const modalEl = document.getElementById('wanderung-popup');
        const wanderungModal = new Modal(modalEl, {
          placement: 'center'
        });

        wanderungModal.show();
        sessionStorage.setItem('wanderung.popup', now);
      }
    })
  </script>
@endpush

<div
  id="wanderung-popup"
  tabindex="-1"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full h-modal"
>
  <div class="relative p-4 w-full max-w-2xl h-full">
    <div class="relative p-4 bg-white rounded-lg shadow md:p-8">
      <button
        type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center absolute top-2 right-2"
        data-modal-hide="wanderung-popup"
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
      <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
        <img src="{{ asset('assets/web/images/Sinneswanderung.jpg') }}" />
      </div>
    </div>
  </div>
</div>
