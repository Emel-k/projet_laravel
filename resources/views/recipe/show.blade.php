<x-layout>
    <h1>{{$recipes['title'] }}</h1>

     @foreach($recipes['ingredients'] as $ingredient)
        <p>{{ $ingredient}}</p>

        @endforeach
</x-layout>
