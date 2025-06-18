<x-layout>
    <h1>Giocatori nel ruolo di {{$position->role}}</h1>
    <div class="container">
        <div class="row">
            @forelse ($position->players as $player )
                <div class="col-12 col-md-6 mt-3 text-center">

                <div class="card bg-card" style="width: 18rem;">
                    <div class="card-body bg-card">
                        <img src="{{Storage::url($player->img)}}" class=" rounded card-img-top img-fluid w-100" style="height: 200px;  object-fit: cover;" alt="...">
                        <h5 class="card-title">Nome : {{$player->name}}</h5>
                        <p class="card-text">Età :{{$player->age}}</p>
                        <p class="card-text">Ruolo:
                        
                        @if ($player->position)
                            
                        <span>
                            <a  class="text-danger" href="{{route('player.index_position', $player->position)}}">{{$player->position->role}}</a>
                            
                        </span>
                        @else
                         <span>Nessun ruolo inserito</span>
                        @endif
                     
                         
                        </p>
                        <p class="card-text">Squadra :{{$player->team}}</p>
                        <p class="card-text">Aggiunto il: {{Auth::user()->created_at->format('d/m/Y')}}</p>
                        <p class="card-text">Creato da {{$player->user->name??'Non specificato'}}</p>
            
                        
                    
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h3>Nessun giocatore nel ruolo di {{$position->role}}</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>