<?php

use App\Models\Character;
use App\Models\House;
use App\Models\Quote;
use Illuminate\Http\Request;
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

Route::get('/random', function () {
    $character = Character::inRandomOrder()->first();
    $character->quotes = [Quote::where('character', $character->slug)->inRandomOrder()->first()];
    return view('character', ['character' => $character]);
});

Route::get('/characters', function () {
    $characters = Character::get();
    return view('characters', ['characters' => $characters]);
});

Route::get('/{house_slug}', function (Request $request) {
    $house = House::where('slug', $request['house_slug'])->first();
    $house->characters = Character::where('house', $house->slug)->get();
    return view('house', ['house' => $house]);
});

Route::get('/{house_slug}/{character_slug}', function (Request $request) {
    $character = Character::where('slug', $request->character_slug)->first();
    $character->quotes = Quote::where('character', $character->slug)->get();
    return view('character', ['character' => $character]);
});

Route::get('/', function () {
    $houses = House::get();
    return view('index', ['houses' => $houses]);
});
