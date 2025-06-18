<x-layout>
    <h1>Tutti i giocatori</h1>
    
    <section class="container">
        <div class="row justify-content-center">
            @foreach ($players as $player )
            <div class="col-12 col-md-3 mt-3 text-center">
                <div class="card bg-card" style="width: 18rem;">
                    <img src="{{Storage::url($player->img)}}" class="card-img-top img-fluid w-100" style="height: 200px; object-fit: cover;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nome : {{$player->name}}</h5>
                        <p class="card-text">Età :{{$player->age}}</p>
                        <p class="card-text">Squadra :{{$player->team}}</p>
                        @auth
                            
                        <a href="{{route('player.show', $player)}}" class="btn btn-mio">Vai al dettaglio</a>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
  <div class="d-flex justify-content-center m-5" >

      {{$players->links()}}
  </div>
      
      
  
</x-layout>