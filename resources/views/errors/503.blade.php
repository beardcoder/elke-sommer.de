<x-layout>
    <header class="relative top-0 z-40 w-full p-4">
        <div class="container mx-auto flex h-16 justify-between">
            <a
                aria-label="Zur Startseite"
                class="flex items-center p-2"
                href="{{ route('frontend.home') }}"
                title="Zur Startseite"
            >
                <x-logo />
            </a>
        </div>
    </header>

    <main class="space-y-12">

        <section class="flex h-full items-center dark:bg-gray-900 dark:text-gray-100 sm:p-16">
            <div
                class="container mx-auto my-8 flex flex-col items-center justify-center space-y-8 px-5 text-center sm:max-w-md">
                <svg
                    class="h-40 w-40 dark:text-gray-600"
                    viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M256,16C123.452,16,16,123.452,16,256S123.452,496,256,496,496,388.548,496,256,388.548,16,256,16ZM403.078,403.078a207.253,207.253,0,1,1,44.589-66.125A207.332,207.332,0,0,1,403.078,403.078Z"
                        fill="currentColor"
                    >
                    </path>
                    <rect
                        fill="currentColor"
                        height="32"
                        width="176"
                        x="168"
                        y="320"
                    ></rect>
                    <polygon fill="currentColor"
                        points="210.63 228.042 186.588 206.671 207.958 182.63 184.042 161.37 162.671 185.412 138.63 164.042 117.37 187.958 141.412 209.329 120.042 233.37 143.958 254.63 165.329 230.588 189.37 251.958 210.63 228.042"
                    >
                    </polygon>
                    <polygon fill="currentColor"
                        points="383.958 182.63 360.042 161.37 338.671 185.412 314.63 164.042 293.37 187.958 317.412 209.329 296.042 233.37 319.958 254.63 341.329 230.588 365.37 251.958 386.63 228.042 362.588 206.671 383.958 182.63"
                    >
                    </polygon>
                </svg>
                <p class="text-3xl">
                    Es sieht so aus, als ob unsere Dienste momentan offline sind. Bitte versuche es in ein paar Minuten
                    nochmal
                </p>
            </div>
        </section>
    </main>

    <x-footer />
</x-layout>
