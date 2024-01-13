<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StakeholderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route("dashboard");
});

Route::get('/dashboard', function () {
    return view('dashboard');


})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(["auth", "verified"])->group(function () {
    # StakeHolders
    Route::get("/stakeholders", [StakeholderController::class, 'index'])->name("stakeholder.all");
    Route::get("/stakeholders/add", [StakeholderController::class, 'create'])->name("stakeholder.add");
    Route::post("/stakeholders/add", [StakeholderController::class, 'store'])->name("stakeholder.add");
    Route::get("/stakeholders/{usergroup:name}", [StakeholderController::class, 'type'])->name("stakeholder.type");


    # Products Category
    Route::get("/products/categories",[ProductCategoryController::class,'index'])->name("product_category.all");
    Route::get("/products/all",[ProductController::class,'index'])->name("products.all");

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/template.php';
