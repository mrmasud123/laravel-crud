<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class merchantlog extends Model
{
    //
    protected $guarded=[];
    public $timestamps=false;
    protected $hidden=[
        'password'
    ];
}
