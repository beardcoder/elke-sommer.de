@php
  $image = TwillImage::make($block, 'form')->crop('default');
  $formId = uniqid('form-');
@endphp
<x-partials.blocks.wrapper id="'block--{{ $block->id }}">
  <div class="mx-auto grid max-w-screen-xl grid-cols-1 gap-8 rounded-lg py-16 md:grid-cols-2">
    <div class="flex flex-col justify-between">
      <div class="space-y-2">
        <h2 class="font-header text-4xl lg:text-5xl">
          {{ $block->input('title') }}
        </h2>
        <div class="format text-gray-400">
          {!! $block->input('text') !!}
        </div>
      </div>
      {!! $image->render(['class' => 'my-6 lg:rounded-tl-10xl lg:rounded-br-10xl rounded-tl-5xl rounded-br-5xl']) !!}
    </div>
    @if (Session::has('success'))
      <div class="flex items-center justify-between self-start border-l-8 border-primary-500 p-6 sm:py-8">
        {{ Session::get('success') }}
      </div>
    @else
      <form
        class="space-y-6"
        id="{{ $formId }}"
        action="{{ route('mail.contact') }}"
        method="POST"
      >
        @csrf
        <x-honeypot />

        <div>
          <label
            class="mb-2 block text-sm font-medium text-gray-900"
            for="name"
          >Name *</label>
          <input
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
            id="name"
            name="name"
            type="text"
            autocomplete="name given-name family-name"
            required
          >
        </div>

        <div>
          <label
            class="mb-2 block text-sm font-medium text-gray-900"
            for="email"
          >Email *</label>
          <input
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
            id="email"
            name="email"
            type="email"
            autocomplete="email"
            required
          >
        </div>

        <div>
          <label
            class="mb-2 block text-sm font-medium text-gray-900"
            for="message"
          >Nachricht *</label>
          <textarea
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
            id="message"
            name="message"
            autocomplete="message"
            required
            rows="3"
          ></textarea>
        </div>

        @if (count($block->getRelated('privacy')) >= 1)
          <div class="flex flex-row flex-wrap">
            <label
              class="order-2 text-sm"
              for="privacy"
            >
              <span>Ich habe die</span>
              <a
                class="underline"
                href="{{ route('frontend.page', [$block->getRelated('privacy')[0]->slug]) }}"
                target="_blank"
              >Datenschatzerklärung</a>
              <span>gelesen *</span>
            </label>
            <input
              class="order-1 mr-2"
              id="privacy"
              name="privacy"
              type="checkbox"
              required
            />
          </div>
        @endif
          <button
            class="w-full rounded bg-primary-500 p-3 text-sm font-bold uppercase tracking-wide text-white transition-opacity disabled:cursor-not-allowed disabled:opacity-50"
            type="submit"
          >
            {{ $block->input('button') }}
          </button>
      </form>
    @endif
  </div>
</x-partials.blocks.wrapper>
