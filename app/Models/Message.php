<?php

namespace Social\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = ['body','user_id'];


    public function users()
    {
      //return $this->belongsToMany('Social\User');
    }


}
