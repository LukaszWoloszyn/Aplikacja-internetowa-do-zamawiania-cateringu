@include('shared.html')

@include('shared.head', ['pageTitle' => 'Catering dietetyczny'])
<body>
    @include('shared.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Zamówienia</h1>
                @if (Auth::check() && !Auth::user()->admin)
                <a href="{{ route('orders.create') }}" class="btn btn-success mb-3">Utwórz zamówienie</a>
                @endif
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Użytkownik</th>
                            <th>Oferta</th>
                            <th>Data początkowa</th>
                            <th>Data końcowa</th>
                            <th>Cena</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->offer->title }}</td>
                                <td>{{ $order->start_date }}</td>
                                <td>{{ $order->end_date }}</td>
                                <td>{{ $order->total_price}}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $order->id) }}" class="btn btn-warning btn-sm">Edytuj</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>
</html>
