<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Wrestler;
use App\Models\Bout;
use App\Models\Promotion;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WrestlerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function() {
    return view('articles', [
        "articles" => Article::all()
    ]);
});

Route::get('wrestlers', [WrestlerController::class, 'getWrestlers']);

Route::get('add/wrestler', [WrestlerController::class, 'loadAddWrestlerForm']);

Route::post('add/wrestler', [WrestlerController::class, 'addWrestler'])->name('addWrestler');

Route::get('wrestler/{wrestler}/edit', [WrestlerController::class, 'editWrestler'])->name('editWrestler');

Route::put('wrestlers/{wrestler}', [WrestlerController::class, 'updateWrestler']);

Route::get('/wrestler/{wrestler}', [WrestlerController::class, 'loadWrestler'])->name('wrestler.show');

Route::get('wrestler/{wrestler}/delete', [WrestlerController::class, 'deleteWrestler']);

Route::get('/bouts', function() {

    $bouts = Bout::with('wrestlers')->get();
    
    return view('bouts', [
        "bouts" => $bouts
    ]);
});

Route::get('/bout/{bout}', function(Bout $bout) {

    $bout->load('promotion');

    return view('bout', [
      'bout' => $bout
    ]);

})->name('bout.show');

Route::get('/promotions', function() {

    $promotions = Promotion::with('wrestlers')->get();

    return view('promotions', [
        "promotions" => $promotions
    ]);
});

Route::get('/promotions/{promotion}',function (Promotion $promotion) {
    $promotion->load('wrestlers');

    return view('promotion', [
        "promotion" => $promotion
    ]);
});

// Route::get('/promotion/{id}', function(Promotion $id) {
//     return view('promotion', [
//         "promotions" => $id
//     ]);
// });


Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);

