<x-layout>
    <h1>Edit d'une recette</h1>

    <form action="{{route('recipe.update', $recipe->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" value="{{$recipe->title}}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{$recipe->description}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary lg">Modif</button>


    </form>
</x-layout>
