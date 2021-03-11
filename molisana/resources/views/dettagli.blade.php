@extends ('layouts.app')

{{-- sincronizzo nome pagina a nome formato pasta --}}
@section('title' , $prodotto['titolo'])

@section('content')

<div class="container">
  {{-- stampo titolo --}}
  <h1> {{ $prodotto['titolo'] }} </h1>
</div>
  <div class="scheda">
    {{-- stampo srh-srp --}}
    <img src="{{ $prodotto['src-h'] }} " alt="">
    <img src="{{ $prodotto['src-p'] }} " alt="">
  </div>
  <div class="descrizione">
    <div class="">
      {{-- con doppio!! prendo formattazione database --}}
      {!! $prodotto['descrizione'] !!}
    </div>
    <div class="info">
      <div class="box">
        <i class="fas fa-info"></i>
      </div>
    </div>
  </div>
@endsection
