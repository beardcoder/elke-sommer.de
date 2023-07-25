<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">

<head>
  {!! SEOMeta::generate() !!}
  {!! JsonLd::generate() !!}

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <script type="application/ld+json">
  {
      "@context": "http://schema.org/",
      "@type": "LocalBusiness",
      "name": "Personal Coaching & Entspannung",
      "image": "",
      "telephone": "01624650294",
      "url": "https://elke-sommer.de/",
      "address": {
          "@type": "PostalAddress",
          "streetAddress": "Ahornstraße 15",
          "addressLocality": "Rain",
          "addressRegion": "Bayern",
          "postalCode": "94369",
          "addressCountry": "Germany"
      },
      "openingHoursSpecification": [
          {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
              "opens": "09:00",
              "closes": "20:00"
          }
      ]
  }
  </script>

  @vite('resources/css/app.css')
</head>

<body class="h-full font-sans">

  {{ $slot }}

  @vite(['resources/js/app.js'])
</body>

</html>
