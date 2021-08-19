<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = ['todo_id','text'];

    protected $table = 'descriptions';

}
