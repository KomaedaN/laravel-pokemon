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
            <h1 class="pokedex__title">Modifier l'équipe</h1>
        </header>

        <form action="{{ route('teams.update', $team) }}" method="post">
            @csrf
            @method('PUT')

            Nom de l'équipe : </br>
            <input type="text" name="name" value="{{ old('name', $team->name) }}" />
            </br>

            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</x-app-layout>

