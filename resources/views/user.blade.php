<x-layout>
    <h1>Il tuo profilo {{Auth::user()->name}}</h1>
    
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 ms-auto fw-bold text-center">
                
                <h1>I TUOI DATI</h1>
                <p>Nome: {{Auth::user()->name}}</p>
                <p>E-mail: {{Auth::user()->email}}</p>
                <p>Numero giocatori inseriti: {{count(Auth::user()->players)}}</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>I TUOI GIOCATORI</h2>
                
            </div>
            @forelse (Auth::user()->players as $player) 
            <div class="col-12 col-md-3 m-3 text-center vh-25 bg-card p-0" data-aos="zoom-out" data-aos-duration="2000">
                 <img src="{{Storage::url($player->img)}}" class=" rounded card-img-top img-fluid w-100" style="height: 200px; object-fit: cover;" alt="...">
                <h5 class="card-title color-pri mb-3 text-uppercase">{{$player->name}}</h5>
                
                <p class="card-text color-pri">Età: {{$player->age}}</p>
                
                <p class="card-text color-pri">Squadra: {{$player->team}}</p>
                
                <p class="card-text color-pri">Aggiunto il: {{Auth::user()->created_at->format('d/m/Y')}}</p>
                
                
                
                {{-- <a href="{{route('show', $player)}}" class="btn btn-primary">Go somewhere</a> --}}
            </div>
                @empty
                <h3>Non hai ancora aggiunto giocatori</h3>
                <p ><a class="btn-mio text-decoration-none btn" href="{{route('player.create')}}">Aggiungine uno</a></p>
                @endforelse
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
</x-layout>