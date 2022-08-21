<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
      $todos = Todo::all();
      return response()->json(
        $todos, 200
    );
    }

    public function store(Request $request)
	{
        $todo = Todo::create($request->all());
        return response()->json(
            $todo, 201
        );
	}

	public function show($id)
	{
        $todo = Todo::find($id);
        return response()->json(
            $todo, 200
        );
	}

	public function update(Request $request, $id)
	{
        $update = [
            'title' => $request->title,
            'content' => $request->content
        ];
        $todo = Todo::where('id', $id)->update($update);
        $todos = Todo::all();
        if ($todo) {
            return response()->json(
                $todos
            , 200);
        } else {
            return response()->json([
                'message' => 'TODOが見つかりませんでした。',
            ], 404);
        }
	}

	public function destroy($id)
	{
        $todo = Todo::where('id', $id)->delete();
        if ($todo) {
            return response()->json([
                'message' => 'TODOを削除しました。',
            ], 200);
        } else {
            return response()->json([
                'message' => 'TODOが見つかりませんでした。',
            ], 404);
        }
	}
}
