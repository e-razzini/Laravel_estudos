@extends('layouts.app',["current"=>"categorias"])

@section('body')
<div class="card border">
<div class="card-bory">
 <h5 class="card-title">cadastro de categorias</h5>
 @if(count($cats ?? '') > 0)
 <table class="table table-ordered table-hover">
   <thead>
       <tr>
           <th>codigo</th>
           <th>nome</th>
           <th>ações</th>
       </tr>
   </thead>
   <tbody>
     @foreach($cats ?? '' as $cat)
      <tr>
      <td>{{$cat->id}}</td>
      <td>{{$cat->nome}}</td>
          <td>
           <a href="/categorias/editar/{{$cat->id}}" class="btn btn-secondary">Editar</a>
           <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-danger">Apagar</a>

          </td>
      </tr>
     @endforeach

   </tbody>
 </table>
 @endif
</div>
<div class="card-footer">
    <a href="/categorias/novo" class="btn btn-secondary">Novo departamento</a>
</div>
</div>



@endsection