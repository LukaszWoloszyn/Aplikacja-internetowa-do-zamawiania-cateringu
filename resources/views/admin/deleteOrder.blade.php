@include('shared.head', ['pageTitle' => 'Edytuj Zamówienie'])

<body>
    @include('shared.navbar')
    <div class="container mt-5 mb-5">
        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj Zamówienie</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                <form method="POST" action="{{ route('admin.update', $order->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="user_id" class="form-label">Użytkownik</label>
                        <select name="user_id" id="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} {{ $user->last_name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Wybierz użytkownika!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="offer_id" class="form-label">Oferta</label>
                        <select name="offer_id" id="offer_id" class="form-control" required>
                            @foreach($offers as $offer)
                                <option value="{{ $offer->id }}" {{ $order->offer_id == $offer->id ? 'selected' : '' }}>
                                    {{ $offer->title }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Wybierz ofertę!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="duration" class="form-label">Czas trwania</label>
                        <select name="duration" id="duration" class="form-control" required>
                            <option value="week" {{ $order->end_date->diffInWeeks($order->start_date) == 1 ? 'selected' : '' }}>Tydzień</option>
                            <option value="month" {{ $order->end_date->diffInMonths($order->start_date) == 1 ? 'selected' : '' }}>Miesiąc</option>
                        </select>
                        <div class="invalid-feedback">Wybierz czas trwania!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="total_price" class="form-label">Cena</label>
                        <input type="number" name="total_price" id="total_price" class="form-control" value="{{ $order->total_price }}" required>
                        <div class="invalid-feedback">Podaj cenę!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-primary" type="submit" value="Zaktualizuj">
                    </div>
                </form>

                <form method="POST" action="{{ route('admin.destroy', $order->id) }}" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-danger" type="submit" value="Usuń">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>
</html>
