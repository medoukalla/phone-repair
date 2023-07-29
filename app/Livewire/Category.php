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

    public function mount() {
        // category id from 
        $id = Route::current()->parameter('category');
        // check if there is category with the id from url 
        if ( ModelsCategory::where('id', $id)->exists() ) {
            // get groups 
            $this->groups = Group::where('category_id', $id)->get();
        }else {
            return $this->redirect('/', navigate: true);
        }
    }

    public function render()
    {

        return view('livewire.category');
    }
}
