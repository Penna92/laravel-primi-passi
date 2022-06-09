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
    $data = [
        'pages' => [
            [
                'url' => 'links',
                'link_name' => 'Useful links'
            ],
            [
                'url' => 'prova1',
                'link_name' => 'Pagina di prova 1'
            ],
            [
                'url' => 'prova2',
                'link_name' => 'Pagina di prova 2'
            ],
            [
                'url' => 'prova3',
                'link_name' => 'Pagina di prova 3'
            ],
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/links', function () {
    $data = [
        'pages' => [
            [
                'url' => 'links',
                'link_name' => 'Useful links'
            ],
            [
                'url' => 'prova1',
                'link_name' => 'Pagina di prova 1'
            ],
            [
                'url' => 'prova2',
                'link_name' => 'Pagina di prova 2'
            ],
            [
                'url' => 'prova3',
                'link_name' => 'Pagina di prova 3'
            ],
        ],
    ];
    return view('links', $data);
})->name('links');

Route::get('/prova1', function () {
    $data = [
        'pages' => [
            [
                'url' => 'links',
                'link_name' => 'Useful links'
            ],
            [
                'url' => 'prova1',
                'link_name' => 'Pagina di prova 1'
            ],
            [
                'url' => 'prova2',
                'link_name' => 'Pagina di prova 2'
            ],
            [
                'url' => 'prova3',
                'link_name' => 'Pagina di prova 3'
            ],
        ],
    ];
    return view('prova1', $data);
})->name('prova1');

Route::get('/prova2', function () {
    $data = [
        'pages' => [
            [
                'url' => 'links',
                'link_name' => 'Useful links'
            ],
            [
                'url' => 'prova1',
                'link_name' => 'Pagina di prova 1'
            ],
            [
                'url' => 'prova2',
                'link_name' => 'Pagina di prova 2'
            ],
            [
                'url' => 'prova3',
                'link_name' => 'Pagina di prova 3'
            ],
        ],
    ];
    return view('prova2', $data);
})->name('prova2');

Route::get('/prova3', function () {
    $data = [
        'pages' => [
            [
                'url' => 'links',
                'link_name' => 'Useful links'
            ],
            [
                'url' => 'prova1',
                'link_name' => 'Pagina di prova 1'
            ],
            [
                'url' => 'prova2',
                'link_name' => 'Pagina di prova 2'
            ],
            [
                'url' => 'prova3',
                'link_name' => 'Pagina di prova 3'
            ],
        ],
    ];
    return view('prova3', $data);
})->name('prova3');
