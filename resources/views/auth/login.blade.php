<x-layout>

  <div class="container layout-form">
    <div class="row">
      <div class="col-12 col-md-6 form-cst">

        <form action="{{route('login')}}" method="POST">
          @csrf
        <div class="mb-3">
          <h1 class="text-center">BENTORNATO!</h1>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label ">Inserisci la tua E-mail</label>
          <input type="email" class="form-control input-color" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Inserisci la tua Password</label>
          <input type="password" name="password" class="form-control input-color" id="exampleInputPassword1">
        </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input input-color" name="remember" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Resta connesso</label>
  </div>
  <button type="submit" class="btn btn-mio">ACCEDI</button>
</form>
</div>
</div>
</div>
</x-layout>