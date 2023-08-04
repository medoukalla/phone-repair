<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Feedback extends Model
{

    protected $table = 'feedbacks';

    static function get_feedbacks() {
        return Feedback::orderBy('id', 'desc')->get();
    }
    
}
