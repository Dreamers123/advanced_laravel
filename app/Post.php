<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function volunteers()
    {
        return $this->belongsTo(Volunteer::class);
    }

}
