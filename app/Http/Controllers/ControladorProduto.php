<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Produto::all();
        return view('produtos',compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prods = new Produto();
        $prods->name =$request->input('nomeproduto');
        $prods->estoque =$request->input('estoque');
        $prods->preco =$request->input('preco');
        $prods->descricao =$request->input('descricao');
        $prods->categoria_id =$request->input('categoria_id');
        $prods->save();
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prods = Produto::find($id);
       if (isset($prods)) {
       return view('/editarproduto', compact('prods'));
        }
        return redirect('/produtos');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prods = Produto::find($id);
       if (isset($prods)) {
        $prods->name=$request->input('nomeproduto');
        $prods->estoque = $request->input('estoque');
        $prods->preco = $request->input('preco');
        $prods->descricao = $request->input('descricao');
        $prods->categoria_id = $request->input('categoria');
        $prods->save();
       }
       return redirect('/produtos');
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $prods = Produto::find($id);
        if(isset($prods)){
            $prods->delete();
        }
        return redirect('/produtos');
    }
    }

