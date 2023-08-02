<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Device;
use App\Models\Group as ModelsGroup;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Group extends Component
{


    public $devices;
    public $group;

    public function mount( ModelsGroup $group ) {
        $this->devices = $group->devices;
        $this->group   = $group;
    }

    public function render()
    {
        return view('livewire.group');
    }
}
