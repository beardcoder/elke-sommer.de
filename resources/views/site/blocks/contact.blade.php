@php
  $image = TwillImage::make($block, 'form')->crop('default');
@endphp
<section class="py-6">
  <div
    class="mx-auto grid max-w-screen-xl grid-cols-1 gap-8 rounded-lg px-8 py-16 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32">
    <div class="flex flex-col justify-between">
      <div class="space-y-2">
        <h2 class="font-header text-4xl font-bold leading-tight lg:text-5xl">
          {{ $block->input('title') }}
        </h2>
        <div class="prose text-gray-400">
          {!! $block->input('text') !!}
        </div>
      </div>
      {!! $image->render(['class' => 'my-6']) !!}
    </div>
    @if (Session::has('success'))
      <div class="flex items-center justify-between self-start border-l-8 border-primary-500 p-6 sm:py-8">
        {{ Session::get('success') }}
      </div>
    @else
      <form class="space-y-6" novalidate="" action="{{ route('mail.contact') }}" method="POST">
        @csrf
        <x-honeypot />
        <div>
          <label class="text-sm" for="name">Name</label>
          <input class="w-full rounded bg-neutral-100 p-3" id="name" name="name" placeholder="" type="text"
            required>
        </div>
        <div>
          <label class="text-sm" for="email">Email</label>
          <input class="w-full rounded bg-neutral-100 p-3" id="email" name="email" type="email" required>
        </div>
        <div>
          <label class="text-sm" for="message">Nachricht</label>
          <textarea class="w-full rounded bg-neutral-100 p-3" id="message" name="message" rows="3"></textarea>
        </div>
        <button class="w-full rounded bg-primary-500 p-3 text-sm font-bold uppercase tracking-wide text-white"
          type="submit">
          {{ $block->input('button') }}
        </button>
      </form>
    @endif

  </div>
</section>
