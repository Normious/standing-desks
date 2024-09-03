<form action="{{ route('checkout') }}" method="POST">
    @csrf
    <input type="hidden" name="amount" value="{{ $totalAmount }}">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ $totalAmount * 100 }}"
            data-name="Standing Desks Ltd"
            data-description="Order Payment"
            data-currency="usd">
    </script>
</form>
