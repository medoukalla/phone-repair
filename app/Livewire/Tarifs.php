<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Tarifs extends Component
{

    // get categories 
    public $categories;
    

    public function render()
    {
        $this->categories = Category::get_active_categories();
        
        return view('livewire.tarifs');
    }
}
