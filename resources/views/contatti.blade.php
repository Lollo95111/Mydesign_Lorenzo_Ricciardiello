<x-layout>

    {{-- <div class="container">
    <div class="row">
    <div class="col-12 my-4">
    <h3>Contattaci</h3>
    <h4>Consigliaci dei titoli</h4>

    <form action="{{route('contatti.nuovo')}}" method="POST">
    @csrf
    <div class="mb-3">
    <label class="form-label">Titolo Film</label>
    <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Trama</label>
    <textarea class="form-control" name="request" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">invia</button>
    </form>

    </div>
    </div> --}}







    <div class="panelRecens">
        <div class="container">
              <!-- AGGIUNGI RECENSIONE -->

              <div class="mb-3">
                <form action="{{route('contatti.nuovo')}}" method="POST">
                    @csrf
                <label for="userName" class="form-label">Inserisci La Tua Email</label>
                <input type="text" class="form-control" name="name" id="userName" placeholder="..">
              </div>
              <div class="mb-3">
                <label for="userDescription" class="form-label">Inserisci La Tua Richiesta</label>
                <input type="text" class="form-control" name="request" id="userDescription" placeholder="..">
              </div>
              <button id="addReviewBtn" class="btn btn-custom">Aggiungi Recensione</button>
            </form>
              <!-- FINE RECENSIONE -->
            </div>
          </div>







    </div>
</x-layout>
