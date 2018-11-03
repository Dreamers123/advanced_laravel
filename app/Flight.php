<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['name','total_seats','available_seats','departure_time','arrival_time','prize','destiantion'];

    public function passenger()
    {
        return $this->hasMany(Passenger::class);
    }

}
