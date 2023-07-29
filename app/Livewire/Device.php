<?php

namespace App\Livewire;

use App\Models\Device as ModelsDevice;
use App\Models\Group;
use App\Models\Repair;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Device extends Component
{


    public $repairs;
    public $device;

    public function mount() {
        // category id from 
        $id = Route::current()->parameter('device');
        // check if there is device with the id from url 
        if ( ModelsDevice::where('id', $id)->exists() ) {
            $this->device =  ModelsDevice::where('id', $id)->first();
            // get repairs 
            $this->repairs = Repair::where('device_id', $id)->get();
        }else {
            return $this->redirect('/', navigate: true);
        }
    }


    public function render()
    {
        return view('livewire.device');
    }
}
