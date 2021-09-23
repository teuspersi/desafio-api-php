<?php

namespace App\Http\Controllers;

use App\Models\Movie as ModelsMovie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show()
    {
        return response()->json(ModelsMovie::all(), 200);
    }

    public function showById($id)
    {
        $movie = ModelsMovie::find($id);
        if (is_null($movie)) {
            return response()->json(['message' => 'Movie not found'], 404);
        }
        return response()->json($movie::find($id), 200);
    }

    public function store(Request $request)
    {
        $movie = ModelsMovie::create($request->all());
        return response($movie, 201);
    }

    public function update(Request $request, $id)
    {
        $movie = ModelsMovie::find($id);
        if (is_null($movie)) {
            return response()->json(['message' => 'Movie not found'], 404);
        }
        $movie->update($request->all());
        return response($movie, 200);
    }

    public function destroy($id)
    {
        $movie = ModelsMovie::find($id);
        if (is_null($movie)) {
            return response()->json(['message' => 'Movie not found'], 404);
        }
        $movie->delete();
        return response()->json(null, 204);
    }
}
