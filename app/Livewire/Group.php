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

    public function mount() {
        // category id from 
        $id = Route::current()->parameter('group');
        // check if there is group with the id from url 
        if ( ModelsGroup::where('id', $id)->exists() ) {
            $this->group = ModelsGroup::where('id', $id)->first();
            // get devices 
            $this->devices = Device::where('group_id', $id)->get();
        }else {
            return $this->redirect('/', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.group');
    }
}
