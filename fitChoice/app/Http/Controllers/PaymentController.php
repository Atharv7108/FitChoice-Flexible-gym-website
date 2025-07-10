<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function showPaymentForm($type)
    {
        $prices = [
            'elite' => 99.99,
            'pro' => 79.99,
            'select' => 49.99
        ];

        if (!array_key_exists($type, $prices)) {
            return redirect()->route('welcome')->with('error', 'Invalid membership type');
        }

        return view('payments.form', [
            'type' => strtoupper($type),
            'amount' => $prices[$type]
        ]);
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'card_number' => 'required|string|size:16',
            'card_expiry' => 'required|string|size:5',
            'card_cvv' => 'required|string|size:3',
            'membership_type' => 'required|in:ELITE,PRO,SELECT',
        ]);

        try {
            // In a real application, you would integrate with a payment gateway here
            // For demo purposes, we'll simulate a successful payment
            
            $payment = Payment::create([
                'user_id' => auth()->id(),
                'membership_type' => $request->membership_type,
                'amount' => $this->getMembershipPrice($request->membership_type),
                'payment_status' => 'completed',
                'transaction_id' => Str::uuid(),
                'payment_date' => now(),
            ]);

            return redirect()->route('payment.success', $payment->id)
                           ->with('success', 'Payment processed successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Payment failed. Please try again.');
        }
    }

    public function success($paymentId)
    {
        $payment = Payment::findOrFail($paymentId);
        return view('payments.success', compact('payment'));
    }

    private function getMembershipPrice($type)
    {
        return [
            'ELITE' => 99.99,
            'PRO' => 79.99,
            'SELECT' => 49.99
        ][$type] ?? 0;
    }
} 