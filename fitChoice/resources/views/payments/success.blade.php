@extends('layouts.app')

@section('title', 'Payment Successful')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-green-600 text-white px-6 py-4">
            <h2 class="text-xl font-semibold">Payment Successful!</h2>
        </div>

        <div class="p-6 space-y-4">
            <div class="flex items-center justify-center mb-6">
                <svg class="h-16 w-16 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

            <div class="space-y-3">
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-600">Membership Type</span>
                    <span class="font-medium">{{ $payment->membership_type }}</span>
                </div>
                
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-600">Amount Paid</span>
                    <span class="font-medium">${{ number_format($payment->amount, 2) }}</span>
                </div>

                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-600">Transaction ID</span>
                    <span class="font-medium text-sm">{{ $payment->transaction_id }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600">Payment Date</span>
                    <span class="font-medium">{{ $payment->payment_date->format('M d, Y H:i') }}</span>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('dashboard') }}" 
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition duration-300">
                    Go to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 