<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

/* Ruta para redirigir al registro de nuevos usuarios desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/register', [DashboardController::class, 'register'])->name('auth.register');
});
/* Ruta para redirigir al registro de rutas desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/rutas', [DashboardController::class, 'rutas'])->name('admin.rutasDash');
});
/* Ruta para redirigir al registro de clientes desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/clientes', [DashboardController::class, 'clientes'])->name('admin.clienteDash');
});
/* Ruta para redirigir al registro de crear categorias desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/CategoriaProducto', [DashboardController::class, 'catProductos'])->name('admin.catProductosDash');
});
/* Ruta para redirigir al registro de productos desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/Productos', [DashboardController::class, 'productos'])->name('admin.productosDash');
});
/* Ruta para redirigir al registro de proveedores desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/Proveedores', [DashboardController::class, 'proveedores'])->name('admin.proveedoresDash');
});
/* Ruta para redirigir al registro de pedidos desde el admin */
Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/dashboard/Pedidos', [DashboardController::class, 'pedidos'])->name('admin.pedidosDash');
});


require __DIR__.'/auth.php';