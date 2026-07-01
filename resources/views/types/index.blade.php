<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
        <a href="{{ url('/types') }}">Tous les types</a>
        |
        <a href="{{ url('/pokemons') }}">Tous les pokemons</a>
        |
        <a href="{{ url('/teams/myindex') }}">mes teams</a>
    </x-slot>

    <body>
        <div class="pokedex">
            <header class="pokedex__header">
                <span class="pokedex__ball" aria-hidden="true"></span>
                <h1 class="pokedex__title">Types</h1>
            </header>
            <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                @foreach ($types as $type)
                    <a href="{{ route('type.show', $type) }}" class="type-badge"
                        style="background-color: {{ $type->color }}">{{ $type->name }}</a>
                @endforeach
            </div>
            <br>
            <a href="{{ route('type.create') }}">Créer un nouveau type</a>
        </div>
    </body>
</x-app-layout>