@extends('layouts.app',["current"=>"produtos"])
@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$prods->id}}" method="post">
            @csrf
        <div class="form-group">
            <label for="nomeproduto">nome do produto</label>
            <input type="text" name="nomeproduto" id="nomeproduto" value="{{$prods->name}}"
             class="form-control">            
        

           <label for="estoque">estoque</label>
           <input type="text" name="estoque" id="estoque" value="{{$prods->estoque}}"
             class="form-control">            
       

           <label for="preco">Preço</label>
           <input type="text" name="preco" id="preco" value="{{$prods->preco}}"
             class="form-control">            
        

           <label for="descricao">Descrição</label>
           <input type="text" name="descricao" id="descricao" value="{{$prods->descricao}}"
             class="form-control">            
        

           <label for="categoria_id">categoria</label>
           <input type="text" name="categoria_id" id="categoria_id" value="{{$prods->categoria_id}}"
             class="form-control">            
        
        <button type="submit" class="btn btn-secondary">atualizar</button>
        <button type="cancel" class="btn btn-danger">cancelar</button>
        </form>
        </div>
    </div>
</div>

@endsection