<?php

use App\Models\Recette;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('/project', 'project');

Route::view('/recette', 'recette');



/*Route::get('/recipe', function (){
    $model = new Recette();
    $recettes = $model->getAll();
    ;

    return view('recipe.index', compact('recettes'));
})->name('recipe.index');*/

Route::get('/recipes/{id}', function (int $id) {

    $model = new Recette();
    $recette = $model->getbyId($id);

    return view('recipe.show', compact('recette'));

})->name('recipe.show');

Route::resource('recipe', RecipeController::class);

