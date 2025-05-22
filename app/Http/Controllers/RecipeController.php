<?php

namespace App\Http\Controllers;

use App\Models\recipe;
use Illuminate\Http\Request;

class recipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }
    public function create()
    {
        return view('recipe.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;

        $recipe->save();

        return redirect()->route('recipe.index')->with('success', 'recipe creer avec succes');
    }
    public function edit(Recipe $recipe)
    {
        return view('recipe.edit', compact('recipe'));
    }
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $recipe->update($request->all());
        return redirect()->route('recipe.index')->with('success', 'recipe modifier avec succes');
    }
    public function destroy(recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipe.index')->with('success', 'recipe supprimer avec succes');
    }

    public function show(recipe $recipe)
    {
        return view('recipe.show', compact('recipe'));
    }
}
