<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CourrierController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

    // Vue du formulaire d'ajout de courrier
Route::get('/courriers/add', [CourrierController::class, 'add'])
    ->name('courrier.add');

    // Soumettre le formulaire d'ajout de courrier
Route::post('/courriers/add', [CourrierController::class, 'store'])
    ->name('courrier.store');

// 
Route::get('/courriers/{courrier]', [CourrierController::class, 'show'])
    ->name('courrier.show');

