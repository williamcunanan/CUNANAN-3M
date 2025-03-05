<?php
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');


