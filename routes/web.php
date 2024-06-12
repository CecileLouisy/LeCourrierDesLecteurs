<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get("/",[ArticleController::class,"viewTen"]);

Route::get("/nouveau",[ArticleController::class,"create"]);
Route::post("/nouveau",[ArticleController::class,"save"]);

Route::get("/details/{id}",[ArticleController::class,"viewArticle"]);

Route::get("/update/{id}",[ArticleController::class,"update"]);
Route::put("/update/{id}",[ArticleController::class,"saveUpdate"]);

Route::delete("/delete/{id}",[ArticleController::class,"delete"]);

