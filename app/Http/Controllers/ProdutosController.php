<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutosRequest;
use App\Http\Requests\UpdateProdutosRequest;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produtos = Produtos::all();
        return $produtos;
    }
    public function produtos(){
        $produtos = Produtos::where('status', 1)->get();
        return $produtos;
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
     * @param  \App\Http\Requests\StoreProdutosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutosRequest $request)
    {
        //
        $produtos = Produtos::create($request->all());
        return $produtos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produtos,$id)
    {
        //
        $produtos = Produtos::find($id);
        return $produtos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdutosRequest  $request
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutosRequest $request, Produtos $produtos)
    {
      
        $produtos = Produtos::find($request->id);
        $produtos->update($request->all());
        return $produtos;

    }

    public function active(Produtos $produtos,$id)
    {
      //
        $produtos = Produtos::where('id', $id)->update(['status' => 1]);
        return $produtos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response

     */
    public function destroy(Produtos $produtos,$id)
    {
        //
        $produtos = Produtos::where('id', $id)->update(['status' => 0]);
       
        return $produtos;
    }
}
