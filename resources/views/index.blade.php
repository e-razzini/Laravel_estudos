@extends('layouts.app')

@section('body')
 <div class="container">   
        <div class="jumbotron bg-dark border border-dark">
        <div class="row justify-content-center">
            <div class="card-deck">
            <div class="card bg-dark border border-secondary">
                <div class="card-body">
                   <h5 class="card-title">Cadastro de produto</h5>
                   <p class="card-text">
                       cadastre os seus produtos aqui 
                   </p>
                   <a href="/produtos" class="btn btn-secondary">Cadastre seus produtos</a>
                </div> 
              </div>
                <div class="card bg-dark border border-secondary">
                <div class="card-body">
                   <h5 class="card-title">Cadastre o departamento</h5>
                   <p class="card-text">
                       cadastre o departamento dos seus produtos aqui.
                   </p>
                   <a href="/categorias" class="btn btn-secondary">Cadastre o departamento</a>
                </div> 
              </div>
            </div>
        </div>
    </div>
</div>
@endsection