@extends ('layouts.app')

@section('title' , 'sezione prodotti')

@section('content')

  <div class="schede">
    @foreach ($formati as $formato)
    <div class="scheda">
      <img src="{{$formato['src']}}" alt="{{ $formato['titolo'] }}">
      <div class="over">
        <a href="#"> {{ $formato['titolo'] }} </a>
      </div>
    </div>
  @endforeach
  </div>

@endsection
