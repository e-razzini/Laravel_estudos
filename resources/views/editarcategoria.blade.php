@extends('layouts.app',["current"=>"categorias"])
@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="/categorias/{{$cat->id}}" method="post">
            @csrf
        <div class="form-group">
            <label for="nomecategoria">nome da categoria</label>
        <input type="text" name="nomecategoria" id="nomecategoria" value="{{$cat->nome}}"
             class="form-control">            
        </div>
        <button type="submit" class="btn btn-secondary">atualizar</button>
        <button type="cancel" class="btn btn-danger">cancelar</button>
        </form>
    </div>
</div>

@endsection