<?php
use App\Livewire\CreateProduct;
use App\livewire\Dashboard;
use App\livewire\Vieworders;
use Illuminate\Support\Facades\Route;

//Dashboard
Route::get('/', dashboard::class)->name('dashboard');

//View order
Route::get('view/orders/{id}', Vieworders::class)->name('view.orders');
Route::get('products/create', createProduct::class)->name('products.create');
