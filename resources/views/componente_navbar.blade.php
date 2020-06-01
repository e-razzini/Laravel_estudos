

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
      <li @if($current =="home") class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/">Home</a>
      </li>
      <li @if($current =="produtos") class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-item nav-link" href="/produtos">produtos</a>
      </li>
      <li @if($current =="categorias") class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-item nav-link" href="/categorias">categorias</a>     
      </li>
    </ul>
  </div>
</nav>