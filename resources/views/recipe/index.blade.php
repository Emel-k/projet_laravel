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


{{--    Pop up fait avec chatgpt--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function (e) {
                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Êtes-vous sûr ?',
                        text: "Cette action est irréversible !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Oui, supprimer',
                        cancelButtonText: 'Annuler'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });

            // Affiche une popup de succès si la session contient 'success'
            @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
            @endif
        });
    </script>


</x-layout>
