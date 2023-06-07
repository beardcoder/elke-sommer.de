{{-- https://mambaui.com/components --}}

@extends('site.layouts.page')

@section('meta')
  {!! seo()->for($item) !!}
@endsection

@section('content')
  <header class="relative top-0 z-40 w-full p-4">
    <div class="container mx-auto flex h-16 justify-between">
      <a rel="noopener noreferrer" href="{{ route('frontend.home') }}" aria-label="Zur Startseite" title="Zur Startseite"
        class="flex items-center p-2">
        <x-logo />
      </a>
      <x-menu />
    </div>
  </header>

  <main class="space-y-12">
    {!! $item->renderBlocks() !!}
  </main>

  <x-footer />
@endsection
