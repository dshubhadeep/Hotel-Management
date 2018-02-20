<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    // public $primaryKey = 'bookingId';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
