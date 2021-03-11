<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
    // name serve a reindirizzare href
})->name('pagina-home');

Route::get('/notizie', function () {

    return view('news');
})->name('pagina-notizie');

Route::get('/prodotti', function () {
  // prendo db/array da file separato in config
  $pasta = config('pasta');

    // inizializzo pasta a collection
    $collection = collect($pasta);

    // filtro array pasta creandone 3 nuovi in base al tipo
    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    // inizializzo data a nuovi array
    $data = [
      'formati' => [
        'lunga' =>   $pasta_lunga,
        'corta' =>   $pasta_corta,
        'cortissima' =>  $pasta_cortissima
      ]
    ];

    return view('products', $data);
})->name('pagina-prodotti');

// passo id come argomento (segnaposto)
Route::get('/dettaglio/{id}', function ($id){
  // recupero array
  $pasta = config('pasta');

  // Condizioni visualizzazione legate all id index di pasta
  if(is_numeric($id) && $id >= 0 && $id < count($pasta)){
    // collego posizione prodotto array all id segnaposto per determinare PRODOTTO
    $prodotto = $pasta[$id];
    // Passo chiave con array associativo per andare a lavorare e passare PRODOTTO
    // a sezione dettagli
    $data = [ 'prodotto' => $prodotto ];

    return view('dettagli', $data);
  }
  else{
    // funzione segnalazione errore
    abort('404');
  };

})->name('pagina-dettagli');
