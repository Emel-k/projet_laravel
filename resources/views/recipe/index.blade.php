<x-layout>
    <h1>Mes recettes</h1>

    @foreach($recipes as $recipe)
        <h2>
            <a href="{{ route('recipe.show', $recipe) }}">{{ $recipe['title'] }}</a>
        </h2>

        <h2>
            <a href="{{ route('recipe.edit', $recipe) }}"> Edit</a>
        </h2>

        <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>


    @endforeach



</x-layout>
