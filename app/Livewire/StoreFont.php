<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class StoreFont extends Component
{

    public function getProductsProperty()
        {
            return Product::query()->get();
        }
    public function render()
    {
        

        return view('livewire.store-font');
    }
}
