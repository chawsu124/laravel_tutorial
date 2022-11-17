<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    // has many through Relation fun()
    public function tutoFromCity(){ // get tutorial title from setting cities id through users table
        return $this->hasManyThrough('App\Models\Tutorial','App\Models\User','city_id','user_id');
        // because want Tutorial Model using User Model, by input use 'city_id' through 'user_id'
    }
}
