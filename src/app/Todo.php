<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    //Modelに一括代入するカラムを指定する。
    protected $fillable = [
        'content',
    ];
}
