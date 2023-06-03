{{-- https://mambaui.com/components --}}

@extends('site.layouts.page')

@section('meta')
  {!! seo($item ?? null) !!}
@endsection

@section('content')
  <header class="relative top-0 z-40 w-full p-4">
    <div class="container mx-auto flex h-16 justify-between">
      <a href="{{ route('frontend.home') }}" aria-label="Zur Startseite" title="Zur Startseite" class="flex items-center p-2">
        <x-logo />
      </a>
      <x-menu />
    </div>
  </header>

  <main class="space-y-12">
    <section class="flex h-full items-center p-16 dark:bg-gray-900 dark:text-gray-100">
      <div class="container mx-auto my-8 flex flex-col items-center justify-center px-5">
        <div class="max-w-md text-center">
          <h2 class="mb-8 text-9xl font-extrabold dark:text-gray-600">
            <span class="sr-only">Error</span>404
          </h2>
          <p class="text-2xl font-semibold md:text-3xl">Entschuldigung diese Seite ist nicht verfügbar.</p>
          <p class="mb-8 mt-4 dark:text-gray-400">
            Aber keine Sorge, du kannst viele andere Dinge auf unserer Homepage finden.</p>
          <a href="{{ route('frontend.home') }}" class="rounded bg-primary-500 px-8 py-3 font-semibold text-white">Zurück
            zur Startseite</a>
        </div>
      </div>
    </section>
  </main>

  <x-footer />
@endsection
