<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
      'title',
      'sender',
      'text'
    ];

    protected $table = 'Chat';
}
