<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MisOperacionesController;
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
    return view('auth.login');
    //return view('auth.login')->name('login');
});

// Route::get('/register', function () {
//     return view('auth.register');
// });

Route::get('/userprofile', function () {
    return view('profile.show');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

/**
 * PLAN DE TRADING MENÚ
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/plantrading', 'App\Http\Controllers\MisOperacionesController@index')->name('plantrading');
Route::middleware(['auth:sanctum', 'verified'])->get('/plantrading/{guid}', 'App\Http\Controllers\MisOperacionesController@showItem')->name('plantrading.show-item');



/**
 * MIS ESTADÍSTICAS MENÚ
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/misestadisticas', 'App\Http\Controllers\MisEstadisticasController@index')->name('misestadisticas');
Route::middleware(['auth:sanctum', 'verified'])->get('/misestadisticas/ganadas', 'App\Http\Controllers\GraficasController@indexOnWins')->name('misestadisticas.ganadas');
Route::middleware(['auth:sanctum', 'verified'])->get('/misestadisticas/perdidas', 'App\Http\Controllers\GraficasController@indexOnLost')->name('misestadisticas.perdidas');
Route::middleware(['auth:sanctum', 'verified'])->get('/misestadisticas/empatadas', 'App\Http\Controllers\GraficasController@indexOnNeutral')->name('misestadisticas.empatadas');


/**
 * PSICOTRADING
 */

Route::middleware(['auth:sanctum', 'verified'])->get('/psicotrading/before-trading', 'App\Http\Controllers\PsicotradingController@BeforeTrading')->name('psicotrading.before-trading');
Route::middleware(['auth:sanctum', 'verified'])->get('/psicotrading/galeria/videos', 'App\Http\Controllers\PsicotradingController@GaleriaPsicotrading')->name('psicotrading.galeria.videos');




/**
 * MATERIAL EXTRA
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/material-extra/galeria', 'App\Http\Controllers\MaterialExtraController@index')->name('material-extra.galeria');


// Route::get('momentum/galeria', function () {
//     return view('momentum.galeria.galeria-momentum');
// });






//Formulario de Operaciones
Route::middleware(['auth:sanctum', 'verified'])->post('/plantrandig/create', 'App\Http\Controllers\MisOperacionesController@store')->name('plantrading.create');
Route::middleware(['auth:sanctum', 'verified'])->put('/plantrandig/edit/{guid}', 'App\Http\Controllers\MisOperacionesController@update')->name('plantrading.update');



//Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');


// Route::get('/registro', function () {
//     return view('auth.register');
//    //echo 'registro';
// });


// Route::get('/', function () {
//     return view('auth.login');
// });
