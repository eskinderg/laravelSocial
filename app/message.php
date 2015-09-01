<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'messages';

    protected $fillable = ['message','user_id'];
      

}
