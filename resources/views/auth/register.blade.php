<x-layout>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-3">
    <h1 class="text-center">BENVENUTO!</h1>
  </div>
  <div class="mb-3">
    <label for="exampleName" class="form-label">Inserisci il tuo nome</label>
    <input type="text" class="form-control" id="exampleName"  name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Inserisci la tua E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Inserisci la tua Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPasswordConferma" class="form-label">Conferma la tua Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConferma">
  </div>
  <button type="submit" class="btn btn-primary">Registrati!</button>
</form>
</x-layout>