<x-layout>
    <header class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <h1>CONTATTACI</h1>
            </div>
        </div>
    </header>
    
    
    <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('data')}}" class=" p-5 shadow">
                    @csrf
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome e cognome</label>
                        <input type="name" name="name" class="form-control input-color" id="name" >
                        
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua E-mail</label>
                        <input type="email" name="email" class="form-control input-color" id="email" aria-describedby="emailHelp">
                       
                    </div>

                    <div class="mb-3">
                        <label for="text_message" class="form-label">Perche ci contatti?</label>
                        <textarea name="text_message" id="text_message" class="input-color"></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-mio">Contattaci</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>