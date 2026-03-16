<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\PaymentCategory;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::latest()->paginate(10);
        $categories = PaymentCategory::getCategories();
        return view('pages.admin.payments.index', compact('payments', 'categories'));
    }

    public function create()
    {
        $categories = PaymentCategory::getCategories();
        return view('pages.admin.payments.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'norek' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        Payment::create($validated);

        return redirect()->route('portal-admin.payment.index')->with('success', 'Pembayaran berhasil dibuat.');
    }


    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('portal-admin.payment.index')->with('success', 'Pembayaran berhasil dihapus.');
    }

    public function frontservicesShow()
    {
        $categories = PaymentCategory::getCategories();
        $payment = Payment::latest()->paginate(10);
        return view('pages.baak', compact('categories', 'payment'));
    }
}
