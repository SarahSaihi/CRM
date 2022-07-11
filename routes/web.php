<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacturesController;
use Illuminate\Support\Facades\Route;

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
// /////////////////////////ROUTES CONTACTS//////////////////////////////////////////////////////

Route::get("/contacts", [ContactController::class, "index"])->name("contacts.index");

Route::get("/contacts/create", [ContactController::class, "create"])->name("contacts.create");

Route::post("/contacts", [ContactController::class, "store"])->name("contacts.store");

Route::get("/contacts/{id}", [ContactController::class, "show"])->name("contacts.show");

Route::get("/contacts/{id}/edit", [ContactController::class, "edit"])->name("contacts.edit");

Route::put("/contacts/{id}", [ContactController::class, "update"])->name("contacts.update");

// //////////////////////////////ROUTES ENTREPRISES////////////////////////////////////////////////

Route::get("/companies", [CompanyController::class, "index"])->name("companies.index");

Route::get("/companies/create", [CompanyController::class, "create"])->name("companies.create");

Route::post("/companies", [CompanyController::class, "store"])->name("companies.store");

Route::get("/companies/{id}", [CompanyController::class, "show"])->name("companies.show");

Route::get("/companies/{id}/edit", [CompanyController::class, "edit"])->name("companies.edit");

Route::put("/companies/{id}", [CompanyController::class, "update"])->name("companies.update");

// ///////////////////////////////ROUTES FACTURES/////////////////////////////////////////////////////

Route::get("/factures", [FacturesController::class, "index"])->name("factures.index");

Route::get("/factures/create", [FacturesController::class, "create"])->name("factures.create");

Route::post("/factures", [FacturesController::class, "store"])->name("factures.store");

Route::get("/factures/{id}", [FacturesController::class, "show"])->name("factures.show");

Route::get("/factures/{id}/edit", [FacturesController::class, "edit"])->name("factures.edit");

Route::put("/factures/{id}", [FacturesController::class, "update"])->name("factures.update");