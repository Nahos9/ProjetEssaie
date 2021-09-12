<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FindYourWORK</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        @livewireStyles
        

    </head>
    <body>
      <div class="container mx-auto px-4">
        @include('partials.navbar')
        <livewire:flash />
      @yield('content')
      </div>
      @livewireScripts
    </body>
</html>