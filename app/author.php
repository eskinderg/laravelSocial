<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    protected $table = 'authors';

    protected $fillable = [];

    protected $hidden = ['id'];
}
