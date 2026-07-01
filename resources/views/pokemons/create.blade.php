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
            <h1 class="pokedex__title">Créer un nouveau Pokémon</h1>
        </header>

        <form action="{{ route('pokemon.store') }}" method="post">
            @csrf

            Numéro Pokédex : </br>
            <input type="number" name="pokedex_number" value="{{ old('pokedex_number') }}" />
            </br>

            Nom : </br>
            <input type="text" name="name" value="{{ old('name') }}" />
            </br>

            Sprite (URL de l'image) : </br>
            <input type="text" name="sprite" value="{{ old('sprite') }}" placeholder="https://..." />
            </br>

            @if (old('sprite'))
                <div class="pokemon-card__imgwrap" style="margin: 0.5rem 0">
                    <img class="pokemon-card__img" src="{{ old('sprite') }}" alt="aperçu" />
                </div>
            @endif

            Types : </br>
            <div class="pokemon-card__types" style="justify-content:flex-start; margin: 0.5rem 0 1rem">
                @foreach ($types as $type)
                    <label style="display:flex; align-items:center; gap:0.4rem">
                        <input
                            type="checkbox"
                            name="types[]"
                            value="{{ $type->id }}"
                            {{ in_array($type->id, old('types', [])) ? 'checked' : '' }}
                        />
                        <span class="type-badge" style="background-color: {{ $type->color }}">{{ $type->name }}</span>
                    </label>
                @endforeach
            </div>

            <button type="submit">Créer</button>
        </form>
    </div>
</body>
</x-app-layout>