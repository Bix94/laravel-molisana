<header>

  <div class="logo">
    {{-- recupero nome img con asset --}}
    <img src="{{ asset('img/logo.png')}}" alt="">
  </div>

  <div class="menu">
    {{-- recupero route da name su web.php --}}
    <a href = "{{ route('pagina-home') }}"> Home </a>
    <a href = "{{ route('pagina-prodotti') }}"> Prodotti </a>
    <a href = "{{ route('pagina-notizie') }}"> News </a>
  </div>







</header>
