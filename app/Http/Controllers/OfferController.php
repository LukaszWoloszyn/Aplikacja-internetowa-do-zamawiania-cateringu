<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Models\Offer;

class OfferController extends Controller
{
    public function main() {
            $offer = Offer::all();
            return view('offer.main', ['offer' => $offer]);
    }

        public function create()
    {
        return view('admin.createOff');
    }

    public function store(StoreOfferRequest $request)
    {
        $input = $request->all();
        Offer::create($input);
        return redirect()->route('main1');
    }

    public function adminEdit()
    {
        $offers = Offer::all();
        return view('admin.updateOff', compact('offers'));
    }

    public function update(StoreOfferRequest $request, $id)
    {
        $offer = Offer::find($id);

        $validated = $request->validated();

        $offer->title = $validated['title'];
        $offer->breakfast = $validated['breakfast'];
        $offer->lunch = $validated['lunch'];
        $offer->dinner = $validated['dinner'];
        $offer->tea = $validated['tea'];
        $offer->supper = $validated['supper'];
        $offer->image = $validated['image'];
        $offer->price_week = $validated['price_week'];
        $offer->price_month = $validated['price_month'];

        $offer->save();

        return redirect()->route('admin.offers.edit')->with('success', 'Oferta została zaktualizowana');
    }

    public function adminIndex()
    {
        $offers = Offer::all();
        return view('admin.deleteOff', compact('offers'));
    }

    public function destroy($id)
    {
        $offer = Offer::findorfail($id);

        $offer->delete();

        return redirect()->route('admin.offers.index')->with('error', 'Nie znaleziono oferty');
    }

}
