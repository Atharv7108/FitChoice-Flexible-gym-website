@extends('layouts.app')

@section('title', 'Payment')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-blue-600 text-white px-6 py-4">
            <h2 class="text-xl font-semibold">Payment for {{ $type }} Membership</h2>
            <p class="text-sm opacity-90">Amount: ${{ number_format($amount, 2) }}</p>
        </div>

        <form action="{{ route('payment.process') }}" method="POST" class="p-6 space-y-4">
            @csrf
            <input type="hidden" name="membership_type" value="{{ $type }}">

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <div class="space-y-2">
                <label for="card_number" class="block text-sm font-medium text-gray-700">Card Number</label>
                <input type="text" id="card_number" name="card_number" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="1234 5678 9012 3456" maxlength="16" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label for="card_expiry" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                    <input type="text" id="card_expiry" name="card_expiry" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="MM/YY" maxlength="5" required>
                </div>

                <div class="space-y-2">
                    <label for="card_cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                    <input type="text" id="card_cvv" name="card_cvv" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="123" maxlength="3" required>
                </div>
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition duration-300">
                Pay Now
            </button>
        </form>
    </div>
</div>

@push('scripts')
<script>
    document.getElementById('card_number').addEventListener('input', function(e) {
        this.value = this.value.replace(/\D/g, '').substring(0, 16);
    });

    document.getElementById('card_expiry').addEventListener('input', function(e) {
        let value = this.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        this.value = value;
    });

    document.getElementById('card_cvv').addEventListener('input', function(e) {
        this.value = this.value.replace(/\D/g, '').substring(0, 3);
    });
</script>
@endpush
@endsection 