@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Catering dietetyczny'])
  <body>
    @include('shared.navbar')

    <div id="start">
      <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-inner">
            @forelse ($offers as $index=>$offer)
          <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{asset('storage/img/offer/'.$offer->image)}}" class="d-block mx-auto w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-white">{{$offer->title}}</h1>
            </div>
          </div>
          @empty
          <th scope="row" colspan="6">Brak ofert</th>

          @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>

    <div id="diety" class="container mt-5">
      <div class="row">
        <h1>Polecane diety: </h1>
      </div>
      <div class="row">
        @forelse ($offers as $offer)
            <div class="col-12 col-sm-6 col-lg-4  mb-4">
                <div class="card">
                    <img src="{{asset('storage/img/offer/'.$offer->image) }}" class="card-img-top" width="50px" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $offer->title }}</h5>
                        <div class="table-responsive-sm">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Śniadanie</th>
                                    <th scope="col">Obiad</th>
                                    <th scope="col">Kolacja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                      <td>{{$offer->breakfast}}</td>
                                      <td>{{$offer->dinner}}</td>
                                      <td>{{$offer->supper}}</td>
                                  </tr>
                            </tbody>
                        </table>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{route('recipes.main', ['id' => $offer->id])}}" class="btn btn-primary">Więcej szczegółów...</a>
                                @if (Auth::check() && !Auth::user()->admin)

                                <a href="{{route('orders.create', ['offer_id' => $offer->id])}}" class="btn btn-success">Dodaj do koszyka</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <p>Brak oferty.</p>
            @endforelse
        </div>
    </div>
    @include('shared.footer')

</html>
