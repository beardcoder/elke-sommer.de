@php
    $image = $block->image('image');
@endphp

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            const lastExecutionTime = sessionStorage.getItem('popup');
            const now = new Date().getTime();

            if (lastExecutionTime === null || now - lastExecutionTime > 300_000) {
                setTimeout(() => {
                    const modalEl = document.getElementById('popup');
                    if (!modalEl) return;

                    const popup = new Modal(modalEl, {
                        placement: 'center',
                        backdrop: 'dynamic',
                        closable: true,
                    });

                    popup.show();

                    modalEl.querySelectorAll('[data-dismiss-target]').forEach((dismissButton) => {
                        dismissButton.addEventListener('click', () => {
                            popup.hide();
                        });
                    });

                    sessionStorage.setItem('popup', now);
                }, 5000); // Verzögerung von 5 Sekunden
            }
        });
    </script>
@endpush

<div
    id="popup"
    tabindex="-1"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
>
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <div class="relative overflow-hidden rounded-md bg-white shadow">
            <button
                type="button"
                class="absolute right-2 top-2 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-full bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                data-dismiss-target="#popup"
                aria-label="Close"
            >
                <svg
                    class="h-3 w-3"
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
            <img
                src="{{ $image }}"
                alt="Popup"
                class="h-auto w-full"
            />
        </div>
    </div>
</div>
