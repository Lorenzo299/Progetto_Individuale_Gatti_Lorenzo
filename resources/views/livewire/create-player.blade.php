<div>
  @if (session('message'))
      
  <div class="alert alert-success">
    {{session('message')}}
  </div>
  
  @endif
    <form wire:submit="store" >
      @csrf
  <div class="mb-3">
    <label for="nome_giocatore" class="form-label">Nome del tuo Giocatore</label>
    <input type="text" class="form-control" id="nome_giocatore" wire:model="name">
    @error('name')
    <span class="error">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="eta_giocatore" class="form-label">Età del tuo Giocatore</label>
    <input type="text" class="form-control" id="eta_giocatore" wire:model="age">
    @error('age')
    <span class="error">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="squadra_giocatore" class="form-label">Squadra del tuo Giocatore</label>
    <input type="text" class="form-control" id="squadra_giocatore" wire:model="team">
    @error('team')
    <span class="error">{{ $message }}</span>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Aggiungi giocatore</button>
</form>
</div>
