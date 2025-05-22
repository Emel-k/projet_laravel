<x-layout>
    <h1>Mes recettes</h1>

    @foreach($recipes as $key => $recette)
        <p>
            <a href="{{ route('recipe.show', $key) }}">{{ $recette['title'] }}</a>
        </p>

    @endforeach


</x-layout>
