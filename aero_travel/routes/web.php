<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tipo_usuariosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\AerolineasController;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\Operadores_turisticosController;
use App\Http\Controllers\Asientos_por_vueloController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\HospedajesController;
use App\Http\Controllers\Fotos_hotelesController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\BancosController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\Detalle_venta_vuelosController;
use App\Http\Controllers\Detalle_venta_hospedajeController;
use App\Http\Controllers\Detalle_venta_actividadesController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\Detalle_venta_paquetesController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\GraficasController;

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
    return view('template/master');
});




Auth::routes();
Route::resource('tipo_usuarios',Tipo_usuariosController::class);
Route::resource('usuarios',UsuariosController::class);
Route::resource('pais',PaisController::class);
Route::resource('estados',EstadosController::class);
Route::resource('ciudades',CiudadesController::class);
Route::resource('bancos',BancosController::class);
Route::resource('venta',VentaController::class);
Route::resource('detalle_venta_vuelos',Detalle_venta_vuelosController::class);
Route::resource('detalle_venta_hospedaje',Detalle_venta_hospedajeController::class);
Route::resource('detalle_venta_actividades',Detalle_venta_actividadesController::class);
Route::resource('venta_paquetes',Detalle_venta_paquetesController::class);
    Route::resource('aerolineas',AerolineasController::class);
Route::resource('hoteles',HotelesController::class);
Route::resource('operadores_turisticos',Operadores_turisticosController::class);
Route::resource('asientos_por_vuelo',Asientos_por_vueloController::class);
Route::resource('vuelos',VuelosController::class);
Route::resource('hospedajes',HospedajesController::class);
Route::resource('fotos_hoteles',Fotos_hotelesController::class);
Route::resource('actividades',ActividadesController::class);
Route::get('correo',[CorreoController::class,'formulario']);
Route::post('enviar_correo',[CorreoController::class,'enviar']);
Route::get('reporteClientes',[PDFController::class,'genera_pdf']);
Route::get('grafica',[GraficasController::class,'grafica']);
Route::get('grafica_pie',[GraficasController::class,'grafica_pie']);
Route::get('grafica_barras',[GraficasController::class,'grafica_barras']);
Route::get('grafica_areas',[GraficasController::class,'grafica_areas']);
Route::get('crear_reporte_nombre/{tipo}',[PDFController::class,'crear_reporte_nombre']);
Route::get('crear_reporte_id/{tipo}',[PDFController::class,'crear_reporte_id']);
Route::get('crear_reporte_vuelos/{tipo}',[PDFController::class,'crear_reporte_vuelos']);
Route::get('ciudadDestino/{id}',[VuelosController::class,'ciudadDestino']);
Route::get('vuelo/{id}',[Asientos_por_vueloController::class,'vuelo']);
Route::get('detalleVenta/{id}',[Detalle_venta_actividadesController::class,'detalleVenta']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
