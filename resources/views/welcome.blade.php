<x-layout>
  
  <header class="vh-100 d-flex justify-content-center align-items-center flex-column">
    <h1 class="welcome-tit" data-aos="fade-down" data-aos-duration="1000">FOOTBLOG</h1>
    <h2 class="welcome-tit2" data-aos="fade-up" data-aos-duration="1000">La tua libreria sul calcio preferita</h2>
  </header>
  @if (session('message'))
  
  <div class="alert alert-success">
    {{session('message')}}
  </div>
  
  @endif
</x-layout>