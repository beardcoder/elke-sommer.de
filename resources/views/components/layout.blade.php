<!doctype html>
<html
  class="h-full"
  lang="{{ app()->getLocale() }}"
>

<head>
  {!! SEOMeta::generate() !!}
  {!! JsonLd::generate() !!}

  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  />

  <link
    href="/apple-touch-icon.png"
    rel="apple-touch-icon"
    sizes="180x180"
  >
  <link
    type="image/png"
    href="/favicon-32x32.png"
    rel="icon"
    sizes="32x32"
  >
  <link
    type="image/png"
    href="/favicon-16x16.png"
    rel="icon"
    sizes="16x16"
  >
  <link
    href="/site.webmanifest"
    rel="manifest"
  >
  <link
    href="/safari-pinned-tab.svg"
    rel="mask-icon"
    color="#5bbad5"
  >
  <meta
    name="msapplication-TileColor"
    content="#ffffff"
  >
  <meta
    name="theme-color"
    content="#ffffff"
  >

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
  <script
    async
    src="https://tracking.letsbenow.de/script.js"
    data-website-id="394a3598-1c57-4831-89d6-fb67542acb2f"
  ></script>
  @vite('resources/css/app.css')
</head>

<body class="h-full font-sans">

  {{ $slot }}

  @vite(['resources/js/app.js'])
</body>

</html>
