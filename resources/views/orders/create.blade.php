@include('shared.html')

@include('shared.head', ['pageTitle' => 'Catering dietetyczny'])
<body>
    @include('shared.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Utwórz zamówienie</h1>
                <form method="POST" action="{{ route('orders.store') }}" id="orderForm">
                    @csrf
                    <div class="form-group">
                        <label for="offer_id">Oferta</label>
                        <select name="offer_id" id="offer_id" class="form-control" required>
                            @foreach($offers as $offer)
                                <option value="{{ $offer->id }}" data-week-price="{{ $offer->price_week }}" data-month-price="{{ $offer->price_month}}" {{ $selectedOffer && $selectedOffer->id == $offer->id ? 'selected' : '' }}>
                                    {{ $offer->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="duration">Czas trwania</label>
                        <select name="duration" id="duration" class="form-control" required>
                            <option value="week">Tydzień</option>
                            <option value="month">Miesiąc</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="total_price">Cena</label>
                        <input type="text" name="total_price" id="total_price" class="form-control" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Utwórz</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const offerSelect = document.getElementById('offer_id');
        const durationSelect = document.getElementById('duration');
        const totalPriceInput = document.getElementById('total_price');

        function calculateTotalPrice() {
            const selectedOption = offerSelect.options[offerSelect.selectedIndex];
            const weekPrice = parseFloat(selectedOption.getAttribute('data-week-price'));
            const monthPrice = parseFloat(selectedOption.getAttribute('data-month-price'));
            const duration = durationSelect.value;

            if (duration === 'week') {
                totalPriceInput.value = weekPrice;
            } else if (duration === 'month') {
                totalPriceInput.value = monthPrice;
            }
        }

        offerSelect.addEventListener('change', calculateTotalPrice);
        durationSelect.addEventListener('change', calculateTotalPrice);

        calculateTotalPrice();
    });
    </script>

    @include('shared.footer')
</body>
</html>
