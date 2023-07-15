<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $allTodos = Todo::all();

        return response()->json([
            'data' => $allTodos,
            'message' => 'Successfully fetch'
        ]);
    }

    public function store(Request $request)
    {
        $name = $request->get('name');

        $todo = Todo::create(['name' => $name]);

        return response()->json([
           'data' => $todo,
           'message' => 'Successfully fetched'
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        $newName = $request->get('name');

        dd($newName);
        $todo->update([
           'name' => $newName
        ]);

        return response()->json([
           'message' => 'Successfully updated'
        ]);
    }

//    public function ()
//    {
//
//    }
}
