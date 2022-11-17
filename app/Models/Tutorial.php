<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','content']; // for mass create() method using model

    // one to one Relation fun()
    public function user(){ // Noput's'to this funName
        return $this->belongsTo('App\Models\User');
    }

    // morphMany() from polymorphic relation 
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');// ('ModelNameUse','funNameforPolyMorphic')
    }
}
