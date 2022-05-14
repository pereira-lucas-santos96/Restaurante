<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Http\Resources\Restaurante as restauranteResource;

class restauranteApiController extends Controller
{
        public function apiAll()
    {
        $todosRest = restaurante::all();
        return restauranteResource::collection($todosRest);
    }
        public function apiFind(Restaurantes $restaurantes)
    {
        return new restauranteResource($restaurante);
    }

    public function apiStore(Request $request)
    {
        try {
            $r = Restaurante::create( $request->all() );
            return response()->json($r,201);
        } catch (\Exception $ex) {
            return response()->json(null,400);
        }
    }
}

