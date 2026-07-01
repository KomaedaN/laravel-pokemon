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
    
<div class="pokedex">
    <div class="pokedex__header">
        <div class="pokedex__ball"></div>
        <h1 class="pokedex__title">Créer une nouvelle équipe</h1>
    </div>

    <form action="{{ route('teams.store') }}" method="post">
        @csrf
        Nom de l'équipe : </br>
        <input type="text" name="name" value="{{ old('name') }}" />
        </br>

        @error('name')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <button type="submit">Créer</button>
    </form>
</div>
</x-app-layout>