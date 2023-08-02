<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model
{
 
    // Function to store new order 
    public function store( Request $request ) {
        $validate = validator( $request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'address' => 'required|max:250',
            'city' => 'required|max:50',
            'code_postal' => 'required|max:50',
            'phone' => 'required|max:50',
            'device_id' => 'required|exists:devices,id',
            'total' => 'required|max:50',
            'device_code' => 'required|max:50',
            'repairs' => 'required'
        ] );

        if ( $validate->errors() ) {
            return back()->withInput()->with([
                'type' => 'danger', 
                'message' => $validate->errors(),
            ]);
        }

        dd( 'skjndks' );
    }
    
}
