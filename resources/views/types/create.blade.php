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
                <h1 class="pokedex__title">Créer un nouveau Type</h1>
            </header>

            <form action="{{ route('type.store') }}" method="post">
                @csrf

                Nom : </br>
                <input type="text" name="name" />
                </br>

                Couleur : </br>
                <input type="text" name="color" placeholder="ex: #4a892b" />
                </br>

                @if (old('color'))
                    <span class="type-badge" style="background-color: {{ old('color') }}">
                        Aperçu
                    </span>
                    </br>
                @endif

                <button type="submit">Créer</button>
            </form>
        </div>
    </body>
</x-app-layout>