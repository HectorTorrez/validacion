<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Crud;

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

Route::get('/usuario',Crud::class)->middleware('auth');

Route::get('/usuario/{id}/{codigo}/{name}/{age}/{direction}/{phone}/{mail?}', function ($id=0, $codigo='',$name = '', $age ='', $direction ='', $phone ='', $mail ='')
{
    return 'Codigo Usuario: '. $id. '; Nombre :'. $name. ';Edad :' .$age .';Direccion :'.$direction.';Telefono :'. $phone.'; Correo :'. $mail; '; ACCION:' .$accion;
})->where(['id','[0-9]+', 'accion'=>'create|uptate|delete', 'codigo'=>'[0-9-a-z]', 'name'=>'[a-z-A-ZñÑ]','age'=>'[0-9]','direction'=>'[a-z-A-ZñÑ]','phone'=>'[0-9]','mail'=>'[a-z-A-ZñÑ@]']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
