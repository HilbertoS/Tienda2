
<div class="card m-3" style="width: 18rem; height: 30rem">
    <img class="card-img-top" src="{{ $imagen }}" alt="Card image cap">
    <div class="card-body">
     <a href="#" class="text-decoration-none text-dark">
      <h5 class="card-title"> {{ $nombre }}</h5>
    </a>
      <h6 class="card-title">{{ $precio }}€</h6>
      <p class="card-text">{{ $descripcion }}</p>
      
      
      @auth
        <a href="#" class="btn btn-primary">Comprar</a>
        <a href="#" class="btn btn-primary ms-2">Añadir</a>
          
        @endauth
    </div>
</div>