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
            <h1 class="pokedex__title">{{ $team->name }}</h1>
            <span class="pokedex__count">{{ $team->pokemons->count() }}/6 Pokémon</span>
        </header>

        <p><a href="{{ route('teams.index') }}">← Retour à mes équipes</a></p>

        @error('pokemon_id')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <h2>Composition</h2>

        @if ($team->pokemons->isEmpty())
            <p>Aucun Pokémon dans cette équipe.</p>
        @else
            <ul class="pokemon-grid">
                @foreach ($team->pokemons as $pokemon)
                    <li class="pokemon-card">
                        <div class="pokemon-card__imgwrap">
                            <img class="pokemon-card__img" src="{{ $pokemon->sprite }}" alt="{{ $pokemon->name }}" loading="lazy">
                        </div>

                        <p class="pokemon-card__name">{{ $pokemon->name }}</p>

                        <form action="{{ route('teams.pokemons.remove', [$team, $pokemon->pivot->id]) }}" method="post" style="margin-top:0.5rem">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Retirer</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif

        <h2>Ajouter un Pokémon</h2>

        <form action="{{ route('teams.pokemons.add', $team) }}" method="post">
            @csrf
            <select name="pokemon_id">
                <option value="">-- Choisir un Pokémon --</option>
                @foreach ($allPokemons as $pokemon)
                    <option value="{{ $pokemon->id }}">{{ $pokemon->name }}</option>
                @endforeach
            </select>
            <button type="submit">Ajouter</button>
            </form>

    </div>
</body>
</x-app-layout>