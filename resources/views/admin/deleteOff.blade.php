@include('shared.html')

@include('shared.head', ['pageTitle' => 'Nasz Catering'])
<body>
  @include('shared.navbar')
  @forelse ($offers as $offer)
  <div id="wycieczki" class="container mt-5 mb-5">
      <div class="row m-2 text-center">
        <h1>Danie:</h1>
      </div>
      <div class="row d-flex justify-content-center">
          <div class="col-12 col-sm-6 col-lg-5">
              <div class="card1">
                  <img src="{{asset('storage/img/offer/'.$offer->image)}}" class="card-img-top">
                  <div class="card-body">
                      <h5 class="card-title">{{ $offer->title }}</h5>
                      <p class="card-text">{{ $offer->breakfast }}</p>
                      <p class="card-text">{{ $offer->lunch }}</p>
                      <p class="card-text">{{ $offer->dinner }}</p>
                      <p class="card-text">{{ $offer->tea }}</p>
                      <p class="card-text">{{ $offer->supper }}</p>
                      <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST" class="mt-2">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Usuń</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
    @empty
  <th scope="row" colspan="6">Brak przepisów</th>
  @endforelse
  @include('shared.footer')
</body>
</html>
