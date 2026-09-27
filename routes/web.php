<?php

use App\Http\Controllers\EbukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ EbukuController::class, "index" ]);

Route::get('/buku', [ EbukuController::class, "create" ]);

Route::post('/buku', [ EbukuController::class, "store" ]);

Route::get('/buku_edit/{id}', [ EbukuController::class, "edit" ]);

Route::post('/buku_edit/{id}', [ EbukuController::class, "update" ]);

Route::delete('/buku/{id}', [ EbukuController::class, "destroy" ]);