@include('shared.head', ['pageTitle' => 'Lista Przepisów'])
<body>
  @include('shared.navbar')
  <div class="container mt-5 mb-5">
    <div class="row mt-4 mb-4 text-center">
      <h1>Lista Przepisów</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive-sm">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Dieta</th>
                <th>Nazwa dania:</th>
                <th>Obraz</th>
                <th>Czas</th>
                <th>Porcje</th>
                <th>Składniki</th>
                <th>Instrukcje</th>
                <th>Akcje</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($recipes as $recipe)
                <tr>
                  <td>{{ $recipe->id }}</td>
                  <td>{{ $recipe->offers->title }}</td>
                  <td>{{$recipe->title}}</td>
                  <td><img src="{{ asset('storage/img/recipes/'.$recipe->image) }}" alt="Obraz" width="100"></td>
                  <td>{{ $recipe->time }} min</td>
                  <td>{{ $recipe->servings }}</td>
                  <td>{{ $recipe->ingredients }}</td>
                  <td>{{ $recipe->instructions }}</td>
                  <td>
                    <a href="{{ route('admin.editRecipe', $recipe->id) }}" class="btn btn-primary">Edytuj</a>
                    <form action="{{ route('admin.destroyRecipe', $recipe->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="8" class="text-center">Brak przepisów</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="{{ route('admin.createRecipe') }}" class="btn btn-success mb-3">Dodaj Przepis</a>
  </div>
  @include('shared.footer')
</body>
</html>
