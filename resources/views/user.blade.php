<x-layout>
    <h1>Il tuo profilo {{Auth::user()->name}}</h1>
    
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ms-auto fw-bold text-center">
                
                <h1><Img></Img> tuoi dati</h1>
                <p>Nome {{Auth::user()->name}}</p>
                <p>E-mail {{Auth::user()->email}}</p>
                <p>Numero giocatori inseriti {{count(Auth::user()->players)}}</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>I TUOI GIOCATORI</h2>
                
            </div>
            @forelse (Auth::user()->players as $item) 
            <div class="col-12 col-md-3  m-3 text-center vh-25 bg-card">
                
                
                
                 <img src="{{Storage::url($item->img)}}" class=" rounded card-img-top img-fluid w-100" style="height: 200px; object-fit: cover;" alt="...">
                <h5 class="card-title">{{$item->name}}</h5>
                
                <p class="card-text">Età: {{$item->age}}</p>
                
                <p class="card-text">Squadra: {{$item->team}}</p>
                
                <p class="card-text">Aggiunto il: {{Auth::user()->created_at->format('d/m/Y')}}</p>
                
                <p class="card-text">Creato da {{$item->user->name??'Non specificato'}}</p>
                
                
                {{-- <a href="{{route('show', $item)}}" class="btn btn-primary">Go somewhere</a> --}}
            </div>
                @empty
                <h3>Non hai ancora aggiunto giocatori</h3>
                <p ><a class="btn-mio text-decoration-none btn" href="{{route('player.create')}}">Aggiungine uno</a></p>
                @endforelse
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
</x-layout>