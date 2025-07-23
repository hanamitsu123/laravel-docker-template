<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all(); //all()は、Eloquentクラスメソッドです。テーブルの全行を取得します。
        return view('todo.index', ['todos' => $todos]); //viewオブジェクトには、htmlを生成する機構がある。render()?
    }
}
