<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
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

Route::get('/generar-informe', function () {
    // Obtener los datos de la tabla proyectos
    $proyectos = DB::table('proyectos')->get();

    // Vista HTML para el informe
    $html = view('informe', compact('proyectos'))->render();

    // Crear una instancia de Dompdf
    $dompdf = new Dompdf();

    // Cargar el contenido HTML en Dompdf
    $dompdf->loadHtml($html);

    // Renderizar el PDF
    $dompdf->render();

    // Descargar el PDF
    return $dompdf->stream('informe.pdf');
})->name('generar-informe');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proyectos', ProyectoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
