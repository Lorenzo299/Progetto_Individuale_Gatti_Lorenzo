<div>
  @if (session('message'))
  
  <div class="alert alert-success">
    {{session('message')}}
  </div>
  @endif
  <div class="container">
    <div class="row justify-space-around">
      <div class="col-12 col-md-8">
        
        <form wire:submit="store">
          @csrf
          <div class="mb-3">
            <label for="nome_giocatore" class="form-label">Nome del tuo Giocatore</label>
            <input type="text" class="form-control input-color @error('name') is-invalid @enderror" id="nome_giocatore" wire:model="name">
            @error('name')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label class="form-label">Seleziona ruolo</label>
            <select class="form-select input-color" aria-label="Default select example" wire:model="posizione" >
              
              @foreach ($positions as $position )
              <option value="{{$position->id}}">{{$position->role}}</option>
              @endforeach
              
            </select>
            @error('posizione')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="eta_giocatore" class="form-label">Età del tuo Giocatore</label>
            <input type="text" class="form-control input-color @error('age') is-invalid @enderror" id="eta_giocatore" wire:model="age">
            @error('age')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="squadra_giocatore" class="form-label">Squadra del tuo Giocatore</label>
            <input type="text" class="form-control input-color @error('team') is-invalid @enderror" id="squadra_giocatore" wire:model="team">
            @error('team')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" class="form-control input-color" id="image" wire:model="img">
            @error('img')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          @if ($img)
          <div class="mb-3">
            <label for="anteprima">Anteprima</label>
            <img src="{{$img->temporaryUrl()}}" alt="">
          </div>
          @endif
          <button type="submit" class="btn btn-mio">Aggiungi giocatore</button>
        </form>
      </div>
    </div>
  </div>
</div>
