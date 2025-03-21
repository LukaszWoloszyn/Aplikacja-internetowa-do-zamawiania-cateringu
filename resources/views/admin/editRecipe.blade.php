@include('shared.head', ['pageTitle' => 'Edytuj Przepis'])
<body>
  @include('shared.navbar')
  <div class="container mt-5 mb-5">
    <div class="row mt-4 mb-4 text-center">
      <h1>Edytuj Przepis</h1>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <form method="POST" action="{{ route('admin.updateRecipe', $recipe->id) }}" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
          <div class="form-group mb-2">
            <label for="offers_id" class="form-label">Dieta</label>
            <select name="offers_id" id="offers_id" class="form-control" required>
              @foreach($offers as $offer)
                <option value="{{ $offer->id }}" {{ $recipe->offers_id == $offer->id ? 'selected' : '' }}>{{ $offer->title }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Wybierz dietę!</div>
          </div>
          <div class="form-group mb-2">
            <label for="title" class="form-label">Tytuł</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $recipe->title }}" required>
            <div class="invalid-feedback">Podaj tytuł!</div>
          </div>
          <div class="form-group mb-2">
            <label for="image" class="form-label">Obraz</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ $recipe->image }}" required>
            <div class="invalid-feedback">Podaj nazwę pliku obrazu!</div>
          </div>
          <div class="form-group mb-2">
            <label for="time" class="form-label">Czas (min)</label>
            <input type="number" name="time" id="time" class="form-control" value="{{ $recipe->time }}" required>
            <div class="invalid-feedback">Podaj czas!</div>
          </div>
          <div class="form-group mb-2">
            <label for="servings" class="form-label">Ilość porcji</label>
            <input type="number" name="servings" id="servings" class="form-control" value="{{ $recipe->servings }}" required>
            <div class="invalid-feedback">Podaj ilość porcji!</div>
          </div>
          <div class="form-group mb-2">
            <label for="ingredients" class="form-label">Składniki</label>
            <textarea name="ingredients" id="ingredients" class="form-control" rows="3" required>{{ $recipe->ingredients }}</textarea>
            <div class="invalid-feedback">Podaj składniki!</div>
          </div>
          <div class="form-group mb-2">
            <label for="instructions" class="form-label">Instrukcje</label>
            <textarea name="instructions" id="instructions" class="form-control" rows="3" required>{{ $recipe->instructions }}</textarea>
            <div class="invalid-feedback">Podaj instrukcje!</div>
          </div>
          <div class="text-center mt-4 mb-4">
            <input class="btn btn-primary" type="submit" value="Zaktualizuj">
          </div>
        </form>
        {{-- <form method="POST" action="{{ route('admin.destroy', $recipe->id) }}" class="mt-3">
          @csrf
          @method('DELETE')
          <div class="text-center mt-4 mb-4">
            <input class="btn btn-danger" type="submit" value="Usuń">
          </div>
        </form> --}}
      </div>
    </div>
  </div>
  @include('shared.footer')
</body>
</html>
