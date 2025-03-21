@include('shared.head', ['pageTitle' => 'Rejestracja'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        <div class="row mt-4 mb-4 text-center">
            <h1>Utwórz nowe konto</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                <form method="POST" action="{{ route('admin.users.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Imię</label>
                        <input id="name" name="name" type="text" class="form-control" required>
                        <div class="invalid-feedback">Podaj imię!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="last_name" class="form-label">Nazwisko</label>
                        <input id="last_name" name="last_name" type="text" class="form-control" required>
                        <div class="invalid-feedback">Podaj nazwisko!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="email" class="form-control" required>
                        <div class="invalid-feedback">Podaj poprawny email!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Hasło</label>
                        <input id="password" name="password" type="password" class="form-control" required>
                        <div class="invalid-feedback">Podaj hasło!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password_confirmation" class="form-label">Potwierdź Hasło</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
                        <div class="invalid-feedback">Potwierdź hasło!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">Numer telefonu</label>
                        <input id="phone_number" name="phone_number" type="text" class="form-control" required>
                        <div class="invalid-feedback">Podaj numer telefonu!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address" class="form-label">Adres</label>
                        <input id="address" name="address" type="text" class="form-control" required>
                        <div class="invalid-feedback">Podaj adres!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-primary" type="submit" value="Utwórz">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
