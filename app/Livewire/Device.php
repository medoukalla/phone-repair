<?php

namespace App\Livewire;

use App\Models\Device as ModelsDevice;
use App\Models\Group;
use App\Models\Repair;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Device extends Component
{


    public $device;

    public $repairs;
    public $total = 0;
    public $counted = [];
    

    public $phoneNumber;

    // test
    public $order;

    public function mount( ModelsDevice $device ) {
        $this->device = $device;
        $this->repairs = $device->repairs;

        // if order found in session
        if ( session()->has('order') ) {
            $session_order = session()->get('order');

            foreach ( $session_order['repairs'] as $rep ) {
                $rep = Repair::where('id', $rep)->first(); 
                array_push( $this->counted, $rep->id );
                $this->total = $this->total + $rep->price;
            }

            $this->phoneNumber = $session_order['phoneNumber'];
        }
    }


    public function render()
    {
        return view('livewire.device');
    }


    public function add_repair( $repair ) {

        // if in array 
        if ( in_array( $repair['id'], $this->counted ) ) {
            
            // remove from counted array 
            if (($key = array_search($repair['id'], $this->counted)) !== false) {
                unset($this->counted[$key]);
            }

            $this->total = $this->total - $repair['price'];
            
        }else {
            // add price 
            $this->total = $this->total + $repair['price'];
            // add to counted array
            array_push( $this->counted, $repair['id'] );
        }
    }


    public function start_order( ModelsDevice $device ) {
        
        // create session data as array 
        $order = array(
            'phoneNumber' => $this->phoneNumber,
            'device_id' => $device->id,
            'repairs' => $this->counted,
            'total' => $this->total,
        );
        // Store the order in session 
        session()->put( 'order' , $order);

        // redirect user to next page
        return $this->redirect(EnvoiPostal::class,  navigate: true);
    }

}
