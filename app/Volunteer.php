<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    public function scopePopular($query)
    {
        return $query->where('votes', '>', 5);
    }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
