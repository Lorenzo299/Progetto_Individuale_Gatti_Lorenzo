<div>
  @if (session('message'))
      
  <div class="alert alert-success">
    {{session('message')}}
  </div>
  
  @endif
    <form wire:submit="update" enctype="multipart/form-data" >
      @csrf
  <div class="mb-3">
    <label for="nome_giocatore" class="form-label">Modifica nome del tuo Giocatore</label>
    <input type="text" class="form-control" id="nome_giocatore" wire:model="name">
    @error('name')
    <span class="error">{{ $message }}</span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="eta_giocatore" class="form-label">Modifica età del tuo Giocatore</label>
    <input type="text" class="form-control" id="eta_giocatore" wire:model="age">
    @error('age')
    <span class="error">{{ $message }}</span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="squadra_giocatore" class="form-label">Modifica squadra del tuo Giocatore</label>
    <input type="text" class="form-control" id="squadra_giocatore" wire:model="team">
    @error('team')
    <span class="error">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="img_giocatore" class="form-label">Immagine del tuo Giocatore</label>
    <input type="file" class="form-control" id="img_giocatore" wire:model="img">
    
  </div>
  <button type="submit" class="btn btn-primary">Modifica dati giocatore</button>
  <a href="#" wire:click="destroy" class="btn btn-mio">Elimina</a>
</form>
</div>

