<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokédex</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=2">
</head>

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
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
