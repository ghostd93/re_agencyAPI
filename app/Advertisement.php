<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    /**
     * Get the user that owns the advertisement.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the property that responds the advertisement.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}