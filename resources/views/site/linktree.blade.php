@extends('site.layouts.page')

@php
  $image = TwillImage::make($item, 'avatar');
  $image->srcSetWidths([128, 256]);
@endphp

@section('content')
  <div class="flex h-full items-center justify-center">
    <div
      class="flex max-w-lg flex-col justify-center rounded-xl p-6 shadow-md dark:bg-gray-900 dark:text-gray-100 sm:px-12">
      {!! $image->render(['class' => 'w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square']) !!}
      <div class="space-y-4 divide-y divide-gray-700 text-center">
        <div class="my-2 space-y-1">
          <h2 class="text-xl font-semibold sm:text-2xl">{!! $item->name !!}</h2>
          <p class="px-5 text-xs dark:text-gray-400 sm:text-base">{!! $item->description !!}</p>
        </div>
        <div class="align-center flex justify-center space-x-4 pt-2">
          <a rel="noopener noreferrer" href="tel:{!! $item->phone !!}" aria-label="Telefonnummer"
            class="rounded-md p-2 dark:text-gray-100 hover:dark:text-violet-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="h-6 w-6">
              <path fill="currentColor"
                d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1c0 9.39 7.61 17 17 17c.55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1c-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 8.5 4c0-.55-.45-1-1-1z" />
            </svg>
          </a>
          </a>
          <a rel="noopener noreferrer" href="#" aria-label="Email"
            class="rounded-md p-2 dark:text-gray-100 hover:dark:text-violet-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="h-6 w-6">
              <path fill="currentColor"
                d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5l-8-5h16zm0 12H4V8l8 5l8-5v10z" />
            </svg>

          </a>
          <a rel="noopener noreferrer" href="#" aria-label="Whatsapp"
            class="rounded-md p-2 dark:text-gray-100 hover:dark:text-violet-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="h-6 w-6">
              <path fill="currentColor"
                d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z" />
            </svg>
          </a>
        </div>
        <div class="align-center flex justify-center space-x-4 pt-2">
          @foreach ($item->links as $link)
            <a href="{!! $link['url'] !!}" target="_blank"
              class="block w-full rounded border px-8 py-3 font-semibold dark:border-gray-100 dark:text-gray-100">{!! $link['title'] !!}</a>
          @endforeach
        </div>
      </div>
    </div>
  @stop
