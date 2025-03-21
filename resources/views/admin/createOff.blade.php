@include('shared.html')

@include('shared.head', ['pageTitle' => 'Dodaj nową ofertę'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nową ofertę</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('admin.storeOff') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="title" class="form-label">Nazwa</label>
                        <input id="title" name="title" type="text" class="form-control @if ($errors->first('title')) is-invalid @endif" value="{{ old('title') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="breakfast" class="form-label">Sniadanie</label>
                        <input id="breakfast" name="breakfast" type="text" class="form-control @if ($errors->first('breakfast')) is-invalid @endif" value="{{ old('breakfast') }}">
                        <div class="invalid-feedback">Nieprawidłowy nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="lunch" class="form-label">Lunch</label>
                        <input id="lunch" name="lunch" type="text" class="form-control @if ($errors->first('lunch')) is-invalid @endif" value="{{ old('lunch') }}">
                        <div class="invalid-feedback">Nieprawidłowy nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="dinner" class="form-label">Obiad</label>
                        <input id="dinner" name="dinner" type="text" class="form-control @if ($errors->first('dinner')) is-invalid @endif" value="{{ old('dinner') }}">
                        <div class="invalid-feedback">Nieprawidłowy nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tea" class="form-label">Podwieczorek</label>
                        <input id="tea" name="tea" type="text" class="form-control @if ($errors->first('tea')) is-invalid @endif" value="{{ old('tea') }}">
                        <div class="invalid-feedback">Nieprawidłowy nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="supper" class="form-label">Kolacja</label>
                        <input id="supper" name="supper" type="text" class="form-control @if ($errors->first('supper')) is-invalid @endif" value="{{ old('supper') }}">
                        <div class="invalid-feedback">Nieprawidłowy nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image" class="form-label">Obraz</label>
                        <input id="image" name="image" type="text" class="form-control @if ($errors->first('image')) is-invalid @endif" value="{{ old('image') }}">
                        <div class="invalid-feedback">Nieprawidłowy nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price_week" class="form-label">Cena za tydzień</label>
                        <input id="price_week" name="price_week" type="text" class="form-control @if ($errors->first('price_week')) is-invalid @endif" value="{{ old('price_week') }}">
                        <div class="invalid-feedback">Nieprawidłowy kod!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price_month" class="form-label">Cena za miesiąc</label>
                        <input id="price_month" name="price_month" type="text" class="form-control @if ($errors->first('price_month')) is-invalid @endif" value="{{ old('price_month') }}">
                        <div class="invalid-feedback">Nieprawidłowy kod!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="delivery" class="form-label">Dostawa</label>
                        <input id="delivery" name="delivery" type="text" class="form-control @if ($errors->first('delivery')) is-invalid @endif" value="{{ old('delivery') }}">
                        <div class="invalid-feedback">Nieprawidłowy kod!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Dodaj">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
