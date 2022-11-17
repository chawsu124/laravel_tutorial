<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // create commentable fun() for polymorphic relation
    public function commentable(){
        return $this->morphTo(); //use polymorphic relation
    }
}
