<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\SubcategoriaController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AdministradorComponent;
use App\Http\Livewire\MarcaComponent;
use App\Http\Livewire\CategoriaComponent;
use App\Http\Livewire\SubcategoriaComponent;
use App\Http\Livewire\ProductoComponent;
use App\Http\Livewire\CreateMarca;
use App\Http\Livewire\CreateProducto;
use App\Http\Livewire\CreateCategoria;
use App\Http\Livewire\CreateSubcategoria;
//Route::get('', [HomeController::class,'index']);//CON J

// Rutas para Categorias
Route::resource('categorias', CategoriaController::class);
Route::resource('subcategorias', SubcategoriaController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('productos', ProductoController::class);
//Route::get('/',HomeComponent::class)->name('home.index');/// ruta  principal
//Route::get('marca',navigation::class)->name('navigation.marca');



Route::get('/',AdministradorComponent::class)->name('admin.index');

Route::get('marcav',MarcaComponent::class)->name('marcas.ver');
Route::get('marcac',CreateMarca::class)->name('marcas.crear');

Route::get('categoriav',CategoriaComponent::class)->name('categorias.ver');
Route::get('categoriac',CreateCategoria::class)->name('categorias.crear');

Route::get('subcategoriav',SubcategoriaComponent::class)->name('subcategorias.ver');
Route::get('subcategoriac',CreateSubcategoria::class)->name('subcategorias.crear');


Route::get('productov',ProductoComponent::class)->name('productos.ver');
Route::get('productoc',CreateProducto::class)->name('productos.crear');