<x-layout>
    <h1>calciatori</h1>
    @if (session('message'))
      
  <div class="alert alert-success">
    {{session('message')}}
  </div>
  
  @endif
</x-layout>