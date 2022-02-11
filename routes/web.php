<?php

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
    return view('welcome');
});

Route::get('/filmes', function (){
    $filmes = [
     'GAME OF THRONES',
       'LOST',
       'MR ROBOT'
   ];
   $html = "<ul>";
        foreach ($filmes as $filme){
            $html .= "<li> $filme </li>";
        }
    $html .= "</ul>";

       return $html;
});


