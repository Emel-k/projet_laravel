<x-layout>
    <h1>Mes recettes</h1>

    @foreach($recipes as $recipe)
        <p>
            <a href="{{ route('recipe.show', $recipe) }}">{{ $recipe['title'] }}</a>
        </p>

        <p>
            <a href="{{ route('recipe.edit', $recipe) }}"> Edit</a>
        </p>

    @endforeach



</x-layout>
