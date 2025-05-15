<?php

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\CatalogProductController;
use App\Http\Controllers\HistoryTransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Models\Carousel;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::inRandomOrder()->take(4)->where('status', 1)->get(); // Ambil 4 produk secara acak
    $carousels = Carousel::all();
    return view('welcome', compact('products', 'carousels'));
});
Route::resource('catalog', CatalogProductController::class)->names('catalog');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin/dashboard', DashboardController::class);
    Route::resource('admin/carousel', CarouselController::class)->names('admin.carousel');
    Route::resource('admin/product', ProductController::class)->names('admin.product');
    Route::resource('admin/transaction', TransaksiController::class)->names('admin.transaction');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/transactions/{transaction}/pay', [TransactionController::class, 'pay']);
    Route::post('/transactions/create-and-pay', [TransactionController::class, 'createAndPay']);
    Route::resource('riwayat-transaksi', HistoryTransactionController::class)->names('history-transaction');
});
require __DIR__ . '/auth.php';
