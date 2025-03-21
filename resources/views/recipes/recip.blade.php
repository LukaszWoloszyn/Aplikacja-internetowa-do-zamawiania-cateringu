@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Catering'])
  <body>
    @include('shared.navbar')
    @forelse ($recipes as $recipe)
  <div class="container my-5">
    <section class="mb-4">
    <h2>Przepis na danie główne z diety: {{$recipe->offers->title}}</h2>
    <div class="row">
        <div class="col-md-4">
          <img src="{{asset('storage/img/recipes/'.$recipe->image)}}" class="img-fluid" alt="danie">
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center mb-3">
              <img src="{{asset('storage/img/recipes/zegar.png')}}" alt="zegar" class="img-fluid" width="50px" height="50px">
              <label class="me-4">Czas przygotowania: {{$recipe->time}} min</label>
              <img src="{{asset('storage/img/recipes/pngegg_jasny.png')}}" alt="czlowiek" class="img-fluid" width="50px" height="50px">
            <label class="me-4">Ilość porcji: {{$recipe->servings}}</label>
            </div>
      </div>
    </div>
  </section>
  <section>
    <h3>Składniki:</h3>
        <label>{{$recipe->ingredients}}</label>
    <h3>Przygotowanie:</h3>
    <label>{{$recipe->instructions}}</label>
  </section>
</div>
    @empty
    <th scope="row" colspan="6">Brak przepisów</th>
    @endforelse
    @include('shared.footer')
</body>
</html>
