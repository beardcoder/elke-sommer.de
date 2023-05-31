{{-- https://mambaui.com/components --}}

@extends('site.layouts.page')

@section('meta')
  {!! seo($item ?? null) !!}
@endsection

@section('content')
  <main class="space-y-12">
    {!! $item->renderBlocks() !!}
  </main>
