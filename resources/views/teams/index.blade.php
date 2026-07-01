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
            <h1 class="pokedex__title">Tout les équipes</h1>
            <span class="pokedex__count">{{ $teams->count() }} équipe(s)</span>
        </header>

        <p><a href="{{ route('teams.create') }}">+ Créer une nouvelle équipe</a></p>

        @if ($teams->isEmpty())
            <p>Tu n'as pas encore d'équipe.</p>
        @else
            <ul class="pokemon-grid">
                @foreach ($teams as $team)
                    <li class="pokemon-card">
                        <p class="pokemon-card__name">{{ $team->name }}</p>

                        <div class="pokemon-card__types">
                            <span class="type-badge" style="background-color:#8a93a6">{{ $team->pokemons->count() }}/6</span>
                        </div>

                        <p style="margin-top:1rem">
                            <a href="{{ route('teams.show', $team) }}">Voir</a>
                        </p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</x-app-layout>