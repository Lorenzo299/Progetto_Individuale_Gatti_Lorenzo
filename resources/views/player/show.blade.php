<x-layout>
    
    <h1>Giocatore {{$player->name}}</h1>
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($player->img)}}" class=" rounded card-img-top img-fluid w-100" style="height: 500px; object-fit: cover;" alt="...">
            </div>
            <div class="col-12 col-md-6 mt-3 text-center">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
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
            
                        
                        <a href="{{route('player.edit', $player)}}" class="btn btn-mio">Modifica</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="vh-50 text-center d-flex justify-content-center">
        
    </div>
    
    
    
                
                
    
</x-layout>