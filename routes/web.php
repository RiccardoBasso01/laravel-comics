<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $links =
        [
            [
                'text' => 'CHARACTERS',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'COMICS',
                'url' => '#',
                'current' => true,
            ],
            [
                'text' => 'MOVIES',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'TV',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'GAMES',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'COLLECTIBLES',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'VIDEOS',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'FANS',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'NEWS',
                'url' => '#',
                'current' => false,
            ],
            [
                'text' => 'SHOP',
                'url' => '#',
                'current' => false,
            ],
        ];
    return view('home', compact('links'));
});
