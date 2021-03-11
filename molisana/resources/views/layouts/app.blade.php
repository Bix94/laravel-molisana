<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title, La Molisana')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  {{-- timbro header pagine --}}
  @include( 'partials.header' )
  <main>
    {{-- aggiunta sezione --}}
    @yield('content')
  </main>
  {{-- timbro footer pagine --}}
  @include( 'partials.footer' )

  <script src=" {{asset('js/app.js')}}">

  </script>

</body>
</html>
