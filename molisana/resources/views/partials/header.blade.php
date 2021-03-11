<header>

  <div class="logo">
    {{-- recupero nome img con asset --}}
    <img src="{{ asset('img/logo.png')}}" alt="">
  </div>

  <div class="menu">
    {{-- recupero route da name su web.php --}}
    {{-- con if verifico se la rotta coincide con il nome pagina
    applicando classi solo nel caso in cui si verifichi --}}
    <a href = "{{ route('pagina-home') }}" class=" {{ Request::route()->getname() == 'pagina-home' ) ? 'active' : ''}}" > Home </a>
    <a href = "{{ route('pagina-prodotti') }}" class=" {{ Request::route()->getname() == 'pagina-prodotti' ) ? 'active' : ''}}" > Prodotti </a>
    <a href = "{{ route('pagina-notizie') }}" class=" {{ Request::route()->getname() == 'pagina-notizie' ) ? 'active' : ''}}" > News </a>
  </div>

</header>
