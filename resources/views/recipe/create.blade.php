<x-layout>
    <h1>Creation d'une nouvelle recette</h1>

    <form method="POST" action="{{ route('recipe.index')}}">
    @csrf
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Content">Content</label>
            <textarea type="content" class="form-control" required ></textarea>
        </div>

        <button type="submit" class="btn btn-primary lg">Ajouter</button>

    </form>
</x-layout>
