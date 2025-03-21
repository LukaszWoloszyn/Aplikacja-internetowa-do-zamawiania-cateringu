<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Offer;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function main1($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.main', compact('recipe'));
    }
    public function recip() {
        $recipes = Recipe::all();
        return view('recipes.recip', ['recipes' => $recipes]);
    }

    public function main($id)
    {
        return view('admin.recipe', [
            'recipe' =>  Recipe::findOrFail($id)
        ]);
    }

    public function index()
    {
        $recipes = Recipe::all();
        return view('admin.recipe', compact('recipes'));
    }

    public function create()
    {
        $offers = Offer::all();
        return view('admin.createRecipe', compact('offers'));
    }

    public function store(RecipeRequest $request)
    {

        Recipe::create([
            'offers_id' => $request->offers_id,
            'title' => $request->title,
            'image' => $request->image,
            'time' => $request->time,
            'servings' => $request->servings,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        return redirect()->route('admin.recipe')->with('success', 'Przepis został dodany');
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $offers = Offer::all();
        return view('admin.editRecipe', compact('recipe', 'offers'));
    }

    public function update(RecipeRequest $request, $id)
    {

        $recipe = Recipe::findOrFail($id);
        $recipe->update([
            'offers_id' => $request->offers_id,
            'title' => $request->title,
            'image' => $request->image,
            'time' => $request->time,
            'servings' => $request->servings,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        return redirect()->route('admin.recipe')->with('success', 'Przepis został zaktualizowany');
    }

    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return redirect()->route('admin.recipe')->with('success', 'Przepis został usunięty');
    }
}
