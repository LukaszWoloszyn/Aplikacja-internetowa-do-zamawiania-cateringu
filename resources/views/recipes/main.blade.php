@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Catering'])
  <body>
    @include('shared.navbar')
    <div id="diety" class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{asset('storage/img/offer/'.$recipe->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->offers->title }}</h5>
                        <p class="card-text"><b>Śniadanie: </b>{{ $recipe->offers->breakfast }}</p>
                        <p class="card-text"><b>Lunch: </b> {{ $recipe->offers->lunch }}</p>
                        <p class="card-text"><b>Obiad: </b> {{ $recipe->offers->dinner }}</p>
                        <p class="card-text"><b>Podwieczorek: </b> {{ $recipe->offers->tea }}</p>
                        <p class="card-text"><b>Kolacja: </b> {{ $recipe->offers->supper }}</p>

                    </div>
                </div>
            </div>
        </div>
      </div>

    @include('shared.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pk1E90Hszlw5EECMfTb/NwRQwFnCSdBsgBtXoZh0+ajMQ5eMf0D0xH9pZdz+7j2" crossorigin="anonymous"></script>
</body>

</html>
