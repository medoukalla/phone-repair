<?php

namespace App\Livewire;

use App\Models\Device;
use App\Models\Order;
use App\Models\Repair;
use Livewire\Component;

class EnvoiPostal extends Component
{

    public $device;
    public $phoneNumber;
    public $repairs;
    public $repairs_text;
    public $repairs_ids;
    public $total;

    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $codePostal;
    public $description;
    
    public $device_mark;
    public $device_password;


    // for errors 
    public $status;
    public $status_message;


    public function mount() {

        // if order found in session
        if ( session()->has('order') ) {

            $order = session()->get('order');

            $this->device = Device::where( 'id', $order['device_id'] )->first();
            $this->phoneNumber = $order['phoneNumber'];
            $this->device_mark = $this->device->group->name;
            $this->total = $order['total'];
            $this->repairs = Repair::whereIn( 'id', $order['repairs'] )->get();

            $repairs_text = '';
            foreach ( $this->repairs as $rep) {
                if ( $repairs_text == '' ) {
                    $repairs_text = $rep->title;
                }else {
                    $repairs_text = $repairs_text .', '. $rep->title;
                }
            }
            $this->repairs_text = $repairs_text;

            $this->repairs_ids = Repair::select('id')->whereIn( 'id', $order['repairs'] )->get();

        }else { $this->device = $this->phoneNumber = $this->repairs = null; }

    }

    public function render()
    {
        return view('livewire.envoi-postal');
    }


    public function submit() {

        $order = new Order();
        $order->first_name      = $this->firstName;
        $order->last_name       = $this->lastName;
        $order->address         = $this->address;
        $order->city            = $this->city;
        $order->code_postal     = $this->codePostal;
        $order->phone           = $this->phoneNumber;
        $order->device_id       = $this->device->id;
        $order->total           = $this->total;
        $order->device_code     = $this->device_password;
        $order->repairs         = $this->repairs_ids;
        $order->repairs_text    = $this->repairs_text;
        $order->description     = $this->description;

        if ( $order->save() ) {
            $this->status = 'success';
            $this->status_message = 'Votre commande a été soumise avec succès.';

            // clear the inputs 
            $this->firstName = $this->lastName = $this->address = $this->phoneNumber = $this->city = $this->codePostal = $this->device_password = $this->description = $this->status = $this->status_message = null;
            // clear the session 
            session()->forget('order');

        }

    }


}
