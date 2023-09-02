<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laracamp</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
    rel="stylesheet" />

  <!-- Styles -->
  <style>
    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: Figtree, sans-serif;
      font-feature-settings: normal
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden] {
      display: none
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::-webkit-backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    .relative {
      position: relative
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-16 {
      margin-top: 4rem
    }

    .mt-6 {
      margin-top: 1.5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .mr-1 {
      margin-right: 0.25rem
    }

    .flex {
      display: flex
    }

    .inline-flex {
      display: inline-flex
    }

    .grid {
      display: grid
    }

    .h-16 {
      height: 4rem
    }

    .h-7 {
      height: 1.75rem
    }

    .h-6 {
      height: 1.5rem
    }

    .h-5 {
      height: 1.25rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-auto {
      width: auto
    }

    .w-16 {
      width: 4rem
    }

    .w-7 {
      width: 1.75rem
    }

    .w-6 {
      width: 1.5rem
    }

    .w-5 {
      width: 1.25rem
    }

    .max-w-7xl {
      max-width: 80rem
    }

    .shrink-0 {
      flex-shrink: 0
    }

    .scale-100 {
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .gap-6 {
      gap: 1.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .self-center {
      align-self: center
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-full {
      border-radius: 9999px
    }

    .bg-gray-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-red-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(254 242 242 / var(--tw-bg-opacity))
    }

    .bg-dots-darker {
      background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
    }

    .from-gray-700\/50 {
      --tw-gradient-from: rgb(55 65 81 / 0.5);
      --tw-gradient-to: rgb(55 65 81 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-transparent {
      --tw-gradient-to: rgb(0 0 0 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
    }

    .bg-center {
      background-position: center
    }

    .stroke-red-500 {
      stroke: #ef4444
    }

    .stroke-gray-400 {
      stroke: #9ca3af
    }

    .p-6 {
      padding: 1.5rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .text-center {
      text-align: center
    }

    .text-right {
      text-align: right
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .font-semibold {
      font-weight: 600
    }

    .leading-relaxed {
      line-height: 1.625
    }

    .text-gray-600 {
      --tw-text-opacity: 1;
      color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-900 {
      --tw-text-opacity: 1;
      color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .text-gray-500 {
      --tw-text-opacity: 1;
      color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .shadow-2xl {
      --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
      --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-gray-500\/20 {
      --tw-shadow-color: rgb(107 114 128 / 0.2);
      --tw-shadow: var(--tw-shadow-colored)
    }

    .transition-all {
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .selection\:bg-red-500 *::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-red-500::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-gray-900:hover {
      --tw-text-opacity: 1;
      color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .hover\:text-gray-700:hover {
      --tw-text-opacity: 1;
      color: rgb(55 65 81 / var(--tw-text-opacity))
    }

    .focus\:rounded-sm:focus {
      border-radius: 0.125rem
    }

    .focus\:outline:focus {
      outline-style: solid
    }

    .focus\:outline-2:focus {
      outline-width: 2px
    }

    .focus\:outline-red-500:focus {
      outline-color: #ef4444
    }

    .group:hover .group-hover\:stroke-gray-600 {
      stroke: #4b5563
    }

    .z-10 {
      z-index: 10
    }

    @media (prefers-reduced-motion: no-preference) {
      .motion-safe\:hover\:scale-\[1\.01\]:hover {
        --tw-scale-x: 1.01;
        --tw-scale-y: 1.01;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
      }
    }

    @media (prefers-color-scheme: dark) {
      .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity))
      }

      .dark\:bg-gray-800\/50 {
        background-color: rgb(31 41 55 / 0.5)
      }

      .dark\:bg-red-800\/20 {
        background-color: rgb(153 27 27 / 0.2)
      }

      .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
      }

      .dark\:bg-gradient-to-bl {
        background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
      }

      .dark\:stroke-gray-600 {
        stroke: #4b5563
      }

      .dark\:text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
      }

      .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
      }

      .dark\:ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
      }

      .dark\:ring-inset {
        --tw-ring-inset: inset
      }

      .dark\:ring-white\/5 {
        --tw-ring-color: rgb(255 255 255 / 0.05)
      }

      .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .group:hover .dark\:group-hover\:stroke-gray-400 {
        stroke: #9ca3af
      }
    }

    @media (min-width: 640px) {
      .sm\:fixed {
        position: fixed
      }

      .sm\:top-0 {
        top: 0px
      }

      .sm\:right-0 {
        right: 0px
      }

      .sm\:ml-0 {
        margin-left: 0px
      }

      .sm\:flex {
        display: flex
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-center {
        justify-content: center
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width: 768px) {
      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width: 1024px) {
      .lg\:gap-8 {
        gap: 2rem
      }

      .lg\:p-8 {
        padding: 2rem
      }
    }
  </style>
</head>

<body class="antialiased">
  <div
    class="bg-dots-darker dark:bg-dots-lighter relative min-h-screen bg-gray-100 bg-center selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center">
    @if (Route::has('login'))
      <div class="z-10 p-6 text-right sm:fixed sm:right-0 sm:top-0">
        @auth
          <a href="{{ url('/home') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Home</a>
        @else
          <a href="{{ route('login') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Log
            in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Register</a>
          @endif
        @endauth
      </div>
    @endif

    <div class="mx-auto max-w-7xl p-6 lg:p-8">
      <div class="flex justify-center">
        <svg class="h-16 w-auto bg-gray-100 dark:bg-gray-900" version="1.2"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 466 536"
          width="466" height="536">
          <title>received_970390264035458-removebg-preview</title>
          <defs>
            <image width="466" height="536" id="img1"
              href="data:image/png;base64,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" />
          </defs>
          <style>
          </style>
          <use id="Background" href="#img1" x="0" y="0" />
        </svg>
      </div>

      <div class="mt-16">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-8">
          <a href="https://laravel.com/docs"
            class="duration-250 flex scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
            <div>
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5"
                  class="h-7 w-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
              </div>

              <h2
                class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                Documentation</h2>

              <p
                class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                Laravel has wonderful documentation covering every aspect of the
                framework. Whether you are a newcomer or have prior experience
                with Laravel, we recommend reading our documentation from
                beginning to end.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5"
              class="mx-6 h-6 w-6 shrink-0 self-center stroke-red-500">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <a href="https://laracasts.com"
            class="duration-250 flex scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
            <div>
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5"
                  class="h-7 w-7 stroke-red-500">
                  <path stroke-linecap="round"
                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </div>

              <h2
                class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                Laracasts</h2>

              <p
                class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                Laracasts offers thousands of video tutorials on Laravel, PHP,
                and JavaScript development. Check them out, see for yourself,
                and massively level up your development skills in the process.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5"
              class="mx-6 h-6 w-6 shrink-0 self-center stroke-red-500">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <a href="https://laravel-news.com"
            class="duration-250 flex scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
            <div>
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5"
                  class="h-7 w-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
              </div>

              <h2
                class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                Laravel News</h2>

              <p
                class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                Laravel News is a community driven portal and newsletter
                aggregating all of the latest and most important news in the
                Laravel ecosystem, including new package releases and tutorials.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5"
              class="mx-6 h-6 w-6 shrink-0 self-center stroke-red-500">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <div
            class="duration-250 flex scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
            <div>
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5"
                  class="h-7 w-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                </svg>
              </div>

              <h2
                class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                Vibrant Ecosystem</h2>

              <p
                class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                Laravel's robust library of first-party tools and libraries,
                such as <a href="https://forge.laravel.com"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Forge</a>,
                <a href="https://vapor.laravel.com"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Vapor</a>,
                <a href="https://nova.laravel.com"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Nova</a>,
                and <a href="https://envoyer.io"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Envoyer</a>
                help you take your projects to the next level. Pair them with
                powerful open source libraries like <a
                  href="https://laravel.com/docs/billing"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Cashier</a>,
                <a href="https://laravel.com/docs/dusk"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Dusk</a>,
                <a href="https://laravel.com/docs/broadcasting"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Echo</a>,
                <a href="https://laravel.com/docs/horizon"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Horizon</a>,
                <a href="https://laravel.com/docs/sanctum"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Sanctum</a>,
                <a href="https://laravel.com/docs/telescope"
                  class="underline hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">Telescope</a>,
                and more.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div
        class="mt-16 flex justify-center px-0 sm:items-center sm:justify-between">
        <div
          class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
          <div class="flex items-center gap-4">
            <a href="https://github.com/sponsors/taylorotwell"
              class="group inline-flex items-center hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5"
                class="-mt-px mr-1 h-5 w-5 stroke-gray-400 group-hover:stroke-gray-600 dark:stroke-gray-600 dark:group-hover:stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
              </svg>
              Sponsor
            </a>
          </div>
        </div>

        <div
          class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:ml-0 sm:text-right">
          Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP
          v{{ PHP_VERSION }})
        </div>
      </div>
    </div>
  </div>
</body>

</html>
