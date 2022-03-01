<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\RutaController;


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


Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    /* Ruta para redirigir al registro de nuevos usuarios desde el admin */
    Route::get('/dashboard/register', [DashboardController::class, 'register'])->name('auth.register');
    /* Ruta para redirigir al registro de rutas desde el admin */
    Route::get('/dashboard/admin/rutas',[DashboardController::class, 'rutasIndex']);
    /* Ruta para redirigir al registro de clientes desde el admin */
    Route::get('/dashboard/admin/cliente', [DashboardController::class, 'clientesIndex']);
    /* Ruta para redirigir al registro de crear categorias desde el admin */
    Route::get('/dashboard/CategoriaProducto', [DashboardController::class, 'catProductos'])->name('admin.catProductosDash');
    /* Ruta para redirigir al registro de productos desde el admin */
    Route::get('/dashboard/Productos', [DashboardController::class, 'productos'])->name('admin.productosDash');
    /* Ruta para redirigir al registro de proveedores desde el admin */
    Route::get('/dashboard/Proveedores', [DashboardController::class, 'proveedores'])->name('admin.proveedoresDash');
    /* Ruta para redirigir al registro de pedidos desde el admin */
    Route::get('/dashboard/Pedidos', [DashboardController::class, 'pedidos'])->name('admin.pedidosDash');
});
/* Ruta para redirigir al registro de rutas desde el admin */
// Route::group(['middleware' => ['auth', 'role:administrator']], function () {
//     Route::get('/dashboard/rutas', [DashboardController::class, 'rutas'])->name('admin.rutasDash');
// });
/* Ruta para redirigir al registro de clientes desde el admin */
// Route::group(['middleware' => ['auth', 'role:administrator']], function () {
//     Route::get('/dashboard/clientes', [DashboardController::class, 'clientes'])->name('admin.clienteDash');
// });
/* Ruta para redirigir al registro de crear categorias desde el admin */
// Route::group(['middleware' => ['auth', 'role:administrator']], function () {
//     Route::get('/dashboard/CategoriaProducto', [DashboardController::class, 'catProductos'])->name('admin.catProductosDash');
// });
/* Ruta para redirigir al registro de productos desde el admin */
// Route::group(['middleware' => ['auth', 'role:administrator']], function () {
//     Route::get('/dashboard/Productos', [DashboardController::class, 'productos'])->name('admin.productosDash');
// });
/* Ruta para redirigir al registro de proveedores desde el admin */
// Route::group(['middleware' => ['auth', 'role:administrator']], function () {
//     Route::get('/dashboard/Proveedores', [DashboardController::class, 'proveedores'])->name('admin.proveedoresDash');
// });
/* Ruta para redirigir al registro de pedidos desde el admin */
// Route::group(['middleware' => ['auth', 'role:administrator']], function () {
//     Route::get('/dashboard/Pedidos', [DashboardController::class, 'pedidos'])->name('admin.pedidosDash');
// });

/* Ruta para crear clientes y rutas desde el rol de distribuidor */
Route::group(['middleware' => ['auth', 'role:distribuidor']], function () {
    Route::resource('/dashboard/rutas',RutaController::class);
    Route::resource('/dashboard/clientes',ClienteController::class);
    Route::resource('/dashboard/pedidos',PedidoController::class);
});

/* Ruta para crear clientes y rutas desde el rol de distribuidor */
Route::group(['middleware' => ['auth', 'role:bodega']], function () {
    Route::resource('/dashboard/productos',ProductoController::class);
    Route::resource('/dashboard/categorias',CategoriaController::class);
    Route::resource('/dashboard/proveedores',ProveedoreController::class);
});

require __DIR__.'/auth.php';