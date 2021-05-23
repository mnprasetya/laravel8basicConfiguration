{{-- basic page layout  --}}

<!DOCTYPE html>
<html lang="en">
<head>
  {{-- meta --}}
  @include('includes.meta')
  
  {{-- Seo Perpage --}}
  @stack('seo')

  {{-- title --}}
  <title>@yield('title') | Page</title>

  {{-- Favicon --}}
  <link rel="apple-touch-icon" href="https://panel-instagram.mplabs.xyz/icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="https://panel-instagram.mplabs.xyz/icon.png">

  {{-- style css --}}
  @stack('before-style')
  @include('includes.style')
  @stack('after-style')

</head>

<body>
  {{-- content --}}
  @include('includes.header')
  @yield('content')
  @include('includes.footer')

  {{-- script js--}}
  @stack('before-script')
  @include('includes.script')
  @stack('after-script')
</body>
</html>