<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;

    protected $table = 'todos';
    //Modelに一括代入するカラムを指定する。
    protected $fillable = [
        'content',
    ];
}
