<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $all_product;
    public function mount()
    {
        $this->all_product = Product::all();
    }
    public function render()
    {
        return view('livewire.product-list', ['title' => 'Product']);
    }
}
