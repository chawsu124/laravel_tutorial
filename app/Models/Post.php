<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // for Softdelete

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // for softdelete

    protected $dates = ['deleted_at'];//deleted row are put in 'deleted_at' column// for softdelete

    protected $fillable = ['title','content']; // for mass create() method using model
}
