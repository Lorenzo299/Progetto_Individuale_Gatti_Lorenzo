<x-layout>
    <h1>Tutti i giocatori</h1>
    
    <section class="container">
        <div class="row justify-content-center">
            @foreach ($players as $player )
            <div class="col-12 col-md-3 m-3 text-center vh-25 bg-card p-0" data-aos="fade-left" data-aos-duration="2000">
                 <img src="{{Storage::url($player->img)}}" class=" rounded card-img-top img-fluid w-100" style="height: 200px; object-fit: cover;" alt="...">
                <h5 class="card-title color-pri mb-3 text-uppercase">{{$player->name}}</h5>
                
                <p class="card-text color-pri">Età: {{$player->age}}</p>
                
                <p class="card-text color-pri">Squadra: {{$player->team}}</p>
                
                <p class="card-text color-pri">Aggiunto il: {{Auth::user()->created_at->format('d/m/Y')}}</p>
                
                <p class="card-text color-pri">Creato da {{$player->user->name??'Non specificato'}}</p>
                
                @auth
                    
                <a href="{{route('player.show', $player)}}" class="btn btn-mio">Vai al dettaglio</a>
                @endauth
                
                {{-- <a href="{{route('show', $player)}}" class="btn btn-primary">Go somewhere</a> --}}
            </div>
                @endforeach
            </div>
        </section>
  <div class="d-flex justify-content-center m-5" >

      {{$players->links()}}
  </div>
      
      
  
</x-layout>