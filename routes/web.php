<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::post('/login',[AuthController::class,"Auth"])->name('authenticate');

//Route::get('/admin',[DashboardController::class,"index"])->name('dashboard');

Route::get('/', [HomeController::class, 'all'])->name('all');
Route::get('/en_solde', [HomeController::class, 'product_status'])->name('product_status');
Route::get('/categorie/{id}', [HomeController::class, 'sortByCategorie'])->name('categories');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show');

// les routes CRUD du model product , accessible que pour l'adminstrateur
Route::get('/admin', [ProductsController::class, 'index'])->name('dashboard');
Route::get('/admin/product_list', [ProductsController::class, 'index'])->name('dashboard.product_list');
Route::get('/admin/product_add', [ProductsController::class, 'create'])->name('dashboard.product_add_form');
Route::post('/admin/product_add', [ProductsController::class, 'store'])->name('dashboard.product_add');
Route::get('/admin/product_edit/{id}', [ProductsController::class, 'edit'])->name('dashboard.product_edit_form');
Route::post('/admin/product_edit', [ProductsController::class, 'update'])->name('dashboard.product_edit');
Route::post('/admin/product_delete', [ProductsController::class, 'destroy'])->name('dashboard.product_delete');

// les routes CRUD du model categorie , accessible que pour l'adminstrateur
Route::get('/admin/categorie_list', [CategoriesController::class, 'index'])->name('dashboard.categorie_list');
Route::get('/admin/categorie_add', [CategoriesController::class, 'create'])->name('dashboard.categorie_add_form');
Route::post('/admin/categorie_add', [CategoriesController::class, 'store'])->name('dashboard.categorie_add');
Route::get('/admin/categorie_edit/{id}', [CategoriesController::class, 'edit'])->name('dashboard.categorie_edit_form');
Route::post('/admin/categorie_edit', [CategoriesController::class, 'update'])->name('dashboard.categorie_edit');
Route::post('/admin/categorie_delete', [CategoriesController::class, 'destroy'])->name('dashboard.categorie_delete');

