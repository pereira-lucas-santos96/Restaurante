<?php

namespace App\Http\Controllers;

use App\Models\restaurante;
use Illuminate\Http\Request;

use Illuminate\Support\facades\Auth; //importado manual 

class RestauranteController extends Controller
{

    public function __construct(Request $request)  
    {
        $this->middleware('auth', ['except'=>['index']]); //verifica se o usuario pode acessar a pagina solicitada, caso não ele será redirecionado para pagina login.
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'entrou index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'entrou create' .Auth::user()->name;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function show(restaurante $restaurante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function edit(restaurante $restaurante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurante $restaurante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function destroy(restaurante $restaurante)
    {
        //
    }
}
