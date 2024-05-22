<?php
use App\Livewire\CreateProduct;
use App\livewire\Dashboard;
use App\livewire\Vieworders;
use App\livewire\ProductList;
use Illuminate\Support\Facades\Route;

//Dashboard
Route::get('/', dashboard::class)->name('dashboard');
//View List of Products
Route::get('/products', ProductList::class)->name('products');

//View order
Route::get('view/orders/{id}', Vieworders::class)->name('view.orders');
Route::get('products/create', createProduct::class)->name('products.create');
