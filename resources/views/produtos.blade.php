@extends('layouts.app',["current"=>"produtos"])

@section('body')
<div class="card border">
<div class="card-bory">
 <h5 class="card-title">cadastro de Produtos</h5>
 @if(count($prods ?? '') > 0)
 <table class="table table-ordered table-hover">
   <thead>
       <tr>
           <th>codigo</th>
           <th>nome</th>
           <th>estoque</th>
           <th>preco</th>
           <th>descrição</th>
           <th>ações</th>
       </tr>
   </thead>
   <tbody>
     @foreach($prods ?? '' as $prod)
      <tr>
      <td>{{$prod->id}}</td>
      <td>{{$prod->name}}</td>
      <td>{{$prod->estoque}}</td>
      <td>{{$prod->preco}}</td>
      <td>{{$prod->descricao}}</td>
          <td>
           <a href="/produtos/editar/{{$prod->id}}" class="btn btn-secondary">Editar</a>
           <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-danger">Apagar</a>

          </td>
      </tr>
     @endforeach

   </tbody>
 </table>
 @endif
</div>
<div class="card-footer">
    <a href="/produtos/novo" class="btn btn-secondary">Novo Produto</a>
</div>
</div>



@endsection