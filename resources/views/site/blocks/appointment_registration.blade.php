@php
    $formId = uniqid('form-');
@endphp

<section id="registration_form">
    <div class="container mx-auto my-6 max-w-3xl">

        <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
            <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                {{ $block->input('title') }}
            </h2>
            @if (Session::has('success'))
                <div class="mb-4 flex border-t-4 border-green-300 bg-green-50 p-4 text-green-800" role="alert">
                    <div class="prose ml-3">
                        {!! $block->input('success') !!}
                    </div>
                </div>
            @else
                <form
                    action="{{ route('appointment.registration') }}"
                    class="space-y-4 md:space-y-6"
                    id="{{ $formId }}"
                    method="POST"
                >
                    @csrf
                    <x-honeypot />
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="name">Name *</label>
                        <input
                            autocomplete="name"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                            id="name"
                            name="name"
                            required
                            type="text"
                        >
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-900" for="email">
                            Deine E-Mail Adresse *
                        </label>
                        <input
                            autocomplete="email"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-primary-600 focus:ring-primary-600 sm:text-sm"
                            id="email"
                            name="email"
                            placeholder="meine@mail.de"
                            required
                            type="email"
                        >
                    </div>

                    @if (count($block->getRelated('privacy')) >= 1)
                        <div class="mb-4 flex items-center">
                            <input
                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                                id="privacy"
                                name="privacy"
                                required
                                type="checkbox"
                            />
                            <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="privacy">
                                <span>Ich habe die</span>
                                <a
                                    class="text-primary-600 underline"
                                    href="{{ route('frontend.page', [$block->getRelated('privacy')[0]->slug]) }}"
                                    target="_blank"
                                >Datenschatzerklärung</a>
                                <span>gelesen *</span>
                            </label>
                        </div>
                    @endif
                    <button
                        class="w-full rounded-lg bg-primary-600 px-5 py-2.5 text-center text-sm font-medium text-white transition-opacity hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 disabled:cursor-not-allowed disabled:opacity-50"
                        type="submit"
                    >
                        Jetzt anmelden
                    </button>

                </form>
            @endif
        </div>
    </div>

</section>
