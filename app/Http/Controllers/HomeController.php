<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Models\Offer;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function home() {
        $recipes = Recipe::all();
        $offers = Offer::all();
        return view('home', ['recipes' => $recipes, 'offers' => $offers]);
    }

    public function main1() {
        $recipes = Recipe::all();
        $offers = Offer::all();
        return view('recipes.main1', ['recipes' => $recipes, 'offers' => $offers]);
    }

    public function create()
    {
        return view('admin.createOff');
    }

    public function store(StoreOfferRequest $request)
    {
        $input = $request->all();
        Offer::create($input);
        return redirect()->route('offer.main');

    }


}
