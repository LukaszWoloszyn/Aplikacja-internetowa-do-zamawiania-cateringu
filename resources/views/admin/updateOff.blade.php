@include('shared.head', ['pageTitle' => 'Edytuj danie'])
<body>
  @include('shared.navbar')
  @forelse ($offers as $offer)
  <div id="wycieczki" class="container mt-5 mb-5">
      <div class="row m-2 text-center">
        <h1>Edytuj danie:</h1>
      </div>
      <div class="row d-flex justify-content-center">
          <div class="col-12 col-sm-6 col-lg-5">
              <div class="card12">
                  <img src="{{asset('storage/img/offer/'.$offer->image)}}" class="card-img-top">
                  <div class="card-body">
                      <h5 class="card-title">{{ $offer->title }}</h5>
                      <p class="card-text">{{ $offer->breakfast }}</p>
                      <p class="card-text">{{ $offer->lunch }}</p>
                      <p class="card-text">{{ $offer->dinner }}</p>
                      <p class="card-text">{{ $offer->tea }}</p>
                      <p class="card-text">{{ $offer->supper }}</p>

                      <form action="{{ route('admin.offers.update', $offer->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                              <label for="title">Tytuł</label>
                              <input type="text" name="title" class="form-control" value="{{ $offer->title }}">
                          </div>
                          <div class="form-group">
                              <label for="breakfast">Śniadanie</label>
                              <input type="text" name="breakfast" class="form-control" value="{{ $offer->breakfast }}">
                          </div>
                          <div class="form-group">
                              <label for="lunch">Lunch</label>
                              <input type="text" name="lunch" class="form-control" value="{{ $offer->lunch }}">
                          </div>
                          <div class="form-group">
                              <label for="dinner">Obiad</label>
                              <input type="text" name="dinner" class="form-control" value="{{ $offer->dinner }}">
                          </div>
                          <div class="form-group">
                              <label for="tea">Podwieczorek</label>
                              <input type="text" name="tea" class="form-control" value="{{ $offer->tea }}">
                          </div>
                          <div class="form-group">
                              <label for="supper">Kolacja</label>
                              <input type="text" name="supper" class="form-control" value="{{ $offer->supper }}">
                          </div>
                          <div class="form-group">
                              <label for="image">Nazwa Pliku Obrazu</label>
                              <input type="text" name="image" class="form-control" value="{{ $offer->image }}">
                          </div>
                          <div class="form-group">
                            <label for="price_week">Cena za tydzień</label>
                            <input type="number" name="price_week" class="form-control" value="{{ $offer->price_week }}" min="0">
                          </div>
                          <div class="form-group">
                            <label for="price_month">Cena za miesiąc</label>
                            <input type="number" name="price_month" class="form-control" value="{{ $offer->price_month }}" min="0">
                          </div>
                        <div class="form-group">
                            <label for="delivery">Dostawa</label>
                            <input type="text" name="delivery" class="form-control" value="{{ $offer->delivery }}">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary1 ml-1">Zaktualizuj</button>
                        </div>
                    </form>
                      <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger ml-2">Usuń</button>
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
