<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">FootBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        @auth
          <li class="nav-item">
          <a class="nav-link" href="#">Inserisci giocatore</a>
        </li>
        @endauth
      </ul>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
         @endguest
         @auth
         <li class="nav-item">
          <a class="nav-link" href="#">Bentornato {{Auth::user()->name}}</a>
        </li>
         <li class="nav-item">
          <form action="{{route('logout')}}" id="logout" method="POST">
            @csrf
             <button onclick="event.preventeDefault(); document.querySelector('#logout').submit();" class="btn btn-danger">Esci</button>
          </form>
        </li>
           
         @endauth
      </ul>
      
      </form>
    </div>
  </div>
</nav>