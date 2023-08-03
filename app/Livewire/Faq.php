<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class Faq extends Component
{

    public $questions;

    public function mount() {
        $this->questions = Question::where('status', true)->get();
    }

    public function render()
    {
        return view('livewire.faq');
    }
}
