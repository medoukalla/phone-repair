<?php

namespace App\Livewire;

use App\Models\Category as ModelsCategory;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Category extends Component
{

    public $groups;

    public function mount(ModelsCategory $category) {
        $this->groups = $category->groups;
    }

    public function render()
    {

        return view('livewire.category');
    }
}
