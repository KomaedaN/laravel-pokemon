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

</x-app-layout>