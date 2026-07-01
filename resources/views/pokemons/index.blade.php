<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
        <a href="{{ url('/types') }}">Tous les types</a>
        |
        <a href="{{ url('/pokemons') }}">Tous les pokemons</a>
        |
        <a href="{{ url('/teams') }}">mes teams</a>
    </x-slot>
<body>
    <div class="pokedex">
        <header class="pokedex__header">
            <span class="pokedex__ball" aria-hidden="true"></span>
            <h1 class="pokedex__title">Pokédex</h1>
            <span class="pokedex__count">{{ count($pokemons) }} Pokémon</span>
        </header>

        <ul class="pokemon-grid">
            @foreach ($pokemons as $pokemon)
                <li class="pokemon-card">
                    <a href="{{ route('pokemon.edit', $pokemon) }}" class="pokemon-card__link">
                    <span
                        class="pokemon-card__number">#{{ str_pad($pokemon->pokedex_number, 3, '0', STR_PAD_LEFT) }}</span>

                    <div class="pokemon-card__imgwrap">
                        <img class="pokemon-card__img" src="{{ $pokemon->sprite }}" alt="{{ $pokemon->name }}"
                            loading="lazy">
                    </div>

                    <p class="pokemon-card__name">{{ $pokemon->name }}</p>

                    <div class="pokemon-card__types">
                        @foreach ($pokemon->types as $type)
                            <span class="type-badge"
                                style="background-color: {{ $type->color }}">{{ $type->name }}</span>
                        @endforeach
                    </div>
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('pokemon.create') }}">Créer un nouveau Pokémon</a>
    </div>
</body>
</x-app-layout>