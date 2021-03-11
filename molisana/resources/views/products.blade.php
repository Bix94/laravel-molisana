@extends ('layouts.app')

@section('title' , 'sezione prodotti')

@section('content')

  @foreach ($formati as $tipo => $formato)
    <h2> {{ $tipo }} </h2>
  <div class="schede">
    @foreach ($formato as $index => $pasta)
    <div class="scheda">
      <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
      <div class="over">
        {{-- collego il [titolo] alla rotta/link pagina dettagli --}}
        {{-- devo passare ID come segnaposto => KEY per ottenere solo un link per ogni prodotto  --}}
        <a href="{{ route('pagina-dettagli', ['id' => $index]) }}"> {{ $pasta['titolo'] }} </a>
      </div>
    </div>
  @endforeach
  </div>
  @endforeach
@endsection
