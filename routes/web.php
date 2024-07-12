<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DisciplinaController;
use App\Models\Departamento;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento');
    Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');
    Route::post('/departamento/store', [DepartamentoController::class, 'store'])->name('departamento.store');
    Route::get('/departamento/edit/{dpto}', [DepartamentoController::class, 'edit'])->name('departamento.edit');
    Route::put('/departamento/update/{dpto}', [DepartamentoController::class, 'update'])->name('departamento.update');
    Route::delete('/departamento/destroy/{dpto}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');

    // Route::resource('departamento', DepartamentoController::class)->names([
    //     'index' => 'departamento',
    //     'create' => 'departamento.create',
    //     'store' => 'departamento.store',
    //     'edit' => 'departamento.edit',
    //     'update' => 'departamento.update',
    //     'destroy' => 'departamento.destroy',
    // ]);

    Route::resource('curso', CursoController::class)->names([
        'index' => 'curso',
        'create' => 'curso.create',
        'store' => 'curso.store',
        'edit' => 'curso.edit',
        'update' => 'curso.update',
        'destroy' => 'curso.destroy',
    ]);

    // Route::get('/curso', [CursoController::class, 'index'])->name('curso');
    // Route::get('/curso/create', [CursoController::class, 'create'])->name('curso.create');
    // Route::post('/curso/store', [CursoController::class, 'store'])->name('curso.store');
    // Route::get('/curso/edit/{dpto}', [CursoController::class, 'edit'])->name('curso.edit');
    // Route::put('/curso/update/{dpto}', [CursoController::class, 'update'])->name('curso.update');
    // Route::delete('/curso/destroy/{dpto}', [CursoController::class, 'destroy'])->name('curso.destroy');

    Route::resource('disciplina', DisciplinaController::class)->names([
        'index' => 'disciplina',
        'create' => 'disciplina.create',
        'store' => 'disciplina.store',
        'edit' => 'disciplina.edit',
        'update' => 'disciplina.update',
        'destroy' => 'disciplina.destroy',
    ]);

});
