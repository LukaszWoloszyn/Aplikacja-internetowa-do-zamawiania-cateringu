@include('shared.html')
  @include('shared.head', ['pageTitle' => 'Nasz Catering'])
  <body>
    @include('shared.navbar')
    <div id="start">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                @forelse ($offers as $index=>$offer)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <div class="container mt-5 mb-5">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                    <div class="card1">
                                        <img src="{{asset('storage/img/offer/'.$offer->image)}}" class="card-img-top">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $offer->title }}</h5>
                                            <p class="card-text"><b>Śniadanie: </b>{{ $offer->breakfast }}</p>
                                            <p class="card-text"><b>Lunch: </b>{{ $offer->lunch }}</p>
                                            <p class="card-text"><b>Obiad: </b>{{ $offer->dinner }}</p>
                                            <p class="card-text"><b>Podwieczorek: </b>{{ $offer->tea }}</p>
                                            <p class="card-text"><b>Kolacja: </b>{{ $offer->supper }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <th scope="row" colspan="6">Brak ofert</th>
                @endforelse
            </div>
            <button class="carousel-control-prev1" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next1" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    @include('shared.footer')
</html>
