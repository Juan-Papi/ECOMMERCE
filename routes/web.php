<?php

use Illuminate\Support\Facades\Route;
use App\Models\Subcategoria;
use App\Models\Producto;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Navigation;
use App\Http\Livewire\AdministradorComponent;
use App\Http\Livewire\CompradorComponent;
use App\Http\Livewire\CategoriaProductos;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CproductoController;
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

/*Route::get('/', function () {
    $subcategorias = Subcategoria::all();
    $productos = Producto::all();
    return view('principal',compact('subcategorias'),compact('productos'));
});
*/
/*
Route::get('/', function () {
    return view('');
});
*/

/*Route::get('/', function () {
    return view('principal');
});*/
//Route::get('/',CompradorComponent::class)->name('comprador.index');

//Route::get('/',CategoriaProductos::class)->name('bienvenida.index');

Route::get('/',WelcomeController::class)->name('welcome.index');
Route::get('productos/{producto}',[CproductoController::class,'show'])->name('productos.cmirar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

