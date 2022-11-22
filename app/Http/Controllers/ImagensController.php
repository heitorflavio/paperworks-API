<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagensRequest;
use App\Http\Requests\UpdateImagensRequest;
use App\Models\Imagens;

class ImagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $imagens = Imagens::all();
        return $imagens;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImagensRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagensRequest $request)
    {
        //
        $imagens = Imagens::create($request->all());
        return $imagens;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagens  $imagens
     * @return \Illuminate\Http\Response
     */
    public function show(Imagens $imagens,$id)
    {
        //
        $imagens = Imagens::where('produto_id',$id)->get();
        return $imagens;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagens  $imagens
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagens $imagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImagensRequest  $request
     * @param  \App\Models\Imagens  $imagens
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImagensRequest $request, Imagens $imagens)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagens  $imagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagens $imagens)
    {
        //
    }
}
