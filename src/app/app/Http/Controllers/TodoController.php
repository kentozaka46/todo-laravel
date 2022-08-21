<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
      $todo_list = Todo::all();

      return view('todos.index', ['todos', $todo_list]);
    }
}
