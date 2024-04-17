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

Route::get('/courriers/add', [CourrierController::class, 'add'])
    ->name('courrier.add');

Route::post('/courriers/add', [CourrierController::class, 'store'])
    ->name('courrier.store');
