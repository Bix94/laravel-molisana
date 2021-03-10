<header>
  <h1>Header prova</h1>

  <div class="logo">
    {{-- recupero nome img con asset --}}
    <img src="{{ asset('img/logo.jpg')}}" alt="">
  </div>

  <div class="menu">
    {{-- recupero route da name su web.php --}}
    <a href = "{{ route('pagina-home') }}"> Home </a>
    <a href = "{{ route('pagina-prodotti') }}"> Prodotti </a>
    <a href = "{{ route('pagina-notizie') }}"> News </a>
  </div>







</header>
