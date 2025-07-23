<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');//viewオブジェクトには、htmlを生成する機構がある。render()?
    }
}