<?php

namespace App\Livewire;

use App\Models\Email;
use Livewire\Component;

class Contact extends Component
{

    public $firstName;
    public $lastName;
    public $email;
    public $phoneNumber;
    public $message;


    public $status = null;
    public $status_message = null;

    public function render()
    {
        return view('livewire.contact');
    }

    public function submit() {

        $email = new Email();
        $email->first_name = $this->firstName;
        $email->last_name = $this->lastName;
        $email->email = $this->email;
        $email->phone_number = $this->phoneNumber;
        $email->message = $this->message;

        if ( $email->save() ) {
            $this->status = 'success';
            $this->status_message = 'Votre e-mail a été envoyé avec succès. Nous vous contacterons dès que possible.';

            $this->firstName = $this->lastName = $this->email = $this->phoneNumber = $this->message = null;
        }

    }
}
