<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Feedback;
use Livewire\Component;

class HomePage extends Component
{


    // get categories 
    public $categories;

    // get feedbacks
    public $feedbacks;


    public function mount() {

        $this->categories = Category::get_active_categories();
        $this->feedbacks  = Feedback::get_feedbacks();
    }

    public function render()
    {


        return view('livewire.home-page');
    }
}
