<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
     protected $fillable = [
        'street','city','title','postal_code', 'description',
    ];
}
