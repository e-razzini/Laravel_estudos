@extends('layouts.app',["current"=>"produtos"])
@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="post">
            @csrf
        <div class="form-group">
            <label for="nomeproduto">nome do produto</label>
            <input type="text" name="nomeproduto" id="nomeproduto" class="form-control">   

            <label for="estoque">estoque</label>
            <input type="text" name="estoque" id="estoque" class="form-control">  

            <label for="preco">Preço do Produto</label>
            <input type="text" name="preco" id="preco" class="form-control">  

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">            
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" id="categoria" class="form-control">            
        </div>
        <button type="submit" class="btn btn-secondary">cadastrar</button>
        <button type="cancel" class="btn btn-danger">cancelar</button>
        </form>
    </div>
</div>

@endsection