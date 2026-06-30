<h1>Créer un nouveau Pokémon</h1>
<form action="{{ route('pokemon.store') }}" method="post">
    @csrf
    Numéro Pokédex :
    </br>
    <input type="number" name="pokedex_number" />
    </br>
    Nom :
    </br>
    <input type="text" name="name" />
    </br>
    Sprite (URL de l'image) :
    </br>
    <input type="text" name="sprite" placeholder="https://..." />
    </br>
    Types :
    </br>
    @foreach ($types as $type)
        <label>
            <input type="checkbox" name="types[]" value="{{ $type->id }}" />
            {{ $type->name }}
        </label>
        </br>
    @endforeach
    <button type="submit">Créer</button>
</form>