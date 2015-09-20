<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'authors';

    protected $fillable = ['name','email','bio'];

    //protected $hidden = ['id'];
}
