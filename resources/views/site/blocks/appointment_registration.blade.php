@php
  $formId = uniqid('form-');
  $appointments = App\Twill\Capsules\Appointments\Models\Appointment::findFuture();
@endphp

<section id="registration_form">
  <div class="container mx-auto my-6 max-w-3xl">

    <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
      <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
        {{ $block->input('title') }}
      </h2>
      @if (Session::has('success'))
        <div
          class="mb-4 flex border-t-4 border-green-300 bg-green-50 p-4 text-green-800"
          role="alert"
        >
          <div class="format ml-3">
            {!! $block->input('success') !!}
          </div>
        </div>
      @else
        <form
          class="space-y-4 md:space-y-6"
          id="{{ $formId }}"
          action="{{ route('appointment.registration') }}"
          method="POST"
          x-data
          x-validate
          x-on:submit="$validate.submit"
        >
          @csrf
          <x-honeypot />

          {{--           <label
            class="mb-2 block text-sm font-medium text-gray-900"
            for="appointment"
          >Termin wählen *</label>
          <select
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
            id="appointment"
            name="appointment"
            data-error-msg="Bitte einen Termin auswählen"
            required
          >
            @foreach ($appointments as $appointment)
              <option value="{{ $appointment->id }}">
                {{ $appointment->title }} am
                {{ DateHelper::getLocalDate($appointment->date_start)->formatLocalized('%d.%m.%Y') }} von
                {{ DateHelper::getLocalDate($appointment->date_start)->formatLocalized('%H:%M') }} Uhr -
                {{ DateHelper::getLocalDate($appointment->date_end)->formatLocalized('%H:%M') }} Uhr
              </option>
            @endforeach
          </select> --}}

          <div>
            <label
              class="mb-2 block text-sm font-medium text-gray-900"
              for="name"
            >Name *</label>
            <input
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
              id="name"
              name="name"
              data-error-msg="Bitte sage mir deinen Namit damit ich weiß wie ich dich ansprechen kann"
              type="text"
              required
            >
          </div>

          <div>
            <label
              class="mb-2 block text-sm font-medium text-gray-900"
              for="email"
            >
              Deine E-Mail Adresse *
            </label>
            <input
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-primary-600 focus:ring-primary-600 sm:text-sm"
              id="email"
              name="email"
              data-error-msg="Bitte eine gültige E-Mail Adresse eingeben"
              type="email"
              placeholder="meine@mail.de"
              x-validate.email
              required
            >
          </div>

          @if (count($block->getRelated('privacy')) >= 1)
            <div class="flex flex-row flex-wrap">
              <label
                class="order-2 text-sm"
                for="privacy"
              >
                <span>Ich habe die</span>
                <a
                  class="text-primary-600 underline"
                  href="{{ route('frontend.page', [$block->getRelated('privacy')[0]->slug]) }}"
                  target="_blank"
                >Datenschatzerklärung</a>
                <span>gelesen *</span>
              </label>
              <input
                class="order-1 mr-2"
                id="privacy"
                name="privacy"
                data-error-msg="Bitte die Datenschutzerklärung lesen und bestätigen"
                type="checkbox"
                required
              />
            </div>
          @endif
          <button
            class="w-full rounded-lg bg-primary-600 px-5 py-2.5 text-center text-sm font-medium text-white transition-opacity hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300 disabled:cursor-not-allowed disabled:opacity-50"
            type="submit"
            x-bind:disabled="!$validate.isComplete('{{ $formId }}')"
          >
            Jetzt anmelden
          </button>

        </form>
      @endif
    </div>
  </div>

</section>
