<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{

    public function store(Request $request)
    {
        $actor = Actor::create($request->all());
        return response($actor, 201);
    }

    public function show()
    {
        return response()->json(Actor::all(), 200);
    }

    public function showById($id)
    {
        $actor = Actor::find($id);
        if (is_null($actor)) {
            return response()->json(['message' => 'Actor not found'], 404);
        }
        return response()->json($actor::find($id), 200);
    }

    public function update(Request $request, $id)
    {
        $actor = Actor::find($id);
        if (is_null($actor)) {
            return response()->json(['message' => 'Actor not found'], 404);
        }
        $actor->update($request->all());
        return response($actor, 200);
    }

    public function destroy($id)
    {
        $actor = Actor::find($id);
        if (is_null($actor)) {
            return response()->json(['message' => 'Actor not found'], 404);
        }
        $actor->delete();
        return response()->json(null, 204);
    }
}
