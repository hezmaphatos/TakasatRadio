<x-header>{{ $title }}</x-header>

<body>
  <x-navbar></x-navbar>
  {{ $slot }}

  <x-footer></x-footer>
</body>
</html>