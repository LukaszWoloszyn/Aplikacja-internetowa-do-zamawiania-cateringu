<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Offer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        if (Auth::user()->admin) {
            $orders = Order::with('user', 'offer')->get();
        } else {
            $orders = Order::with('user', 'offer')->where('user_id', auth()->id())->get();
        }

        return view('orders.index', compact('orders'));
    }

    public function create($offer_id = null)
    {
        $user = auth()->user();
        if ($user instanceof Account && $user->isAdmin()) {
            return redirect()->route('orders.index')->with('error', 'Administratorzy nie mogą składać zamówień');
        }

        $offers = Offer::all();
        $selectedOffer = $offer_id ? Offer::find($offer_id) : null;
        return view('orders.create', compact('offers', 'selectedOffer'));
    }

    public function store(Request $request)
    {


        $request->validate([
            'offer_id' => 'required|exists:offers,id',
            'duration' => 'required|in:week,month',
        ]);

        $offer = Offer::find($request->offer_id);
        $startDate = Carbon::now();
        $endDate = $request->duration == 'week' ? $startDate->copy()->addWeek() : $startDate->copy()->addMonth();
        $totalPrice = $request->duration == 'week' ? $offer->price_month : $offer->price * 30;

        Order::create([
            'user_id' => auth()->id(),
            'offer_id' => $request->offer_id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('orders.index')->with('success', 'Zamówienie zostało utworzone');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $order->start_date = Carbon::parse($order->start_date);
        $order->end_date = Carbon::parse($order->end_date);
        $offers = Offer::all();
        $users = Account::where('admin', 0)->get();
        return view('admin.editOrder', compact('order', 'offers', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:accounts,id',
            'offer_id' => 'required|exists:offers,id',
            'duration' => 'required|in:week,month',
            'total_price' => 'required|numeric|min:0',
        ]);

        $order = Order::findOrFail($id);
        $offer = Offer::find($request->offer_id);
        $startDate = Carbon::parse($order->start_date);
        $endDate = $request->duration == 'week' ? $startDate->copy()->addWeek() : $startDate->copy()->addMonth();
        $totalPrice = $request->duration == 'week' ? $offer->price_week : $offer->price_month;

        $user = Account::find($request->user_id);
        if ($user->admin) {
            return redirect()->back()->with('error', 'Nie można przypisać zamówienia do administratora');
        }

        $order->update([
            'user_id' => $request->user_id,
            'offer_id' => $request->offer_id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('orders.index')->with('success', 'Zamówienie zostało zaktualizowane');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Zamówienie zostało usunięte');
    }
}


