<h1>Modifier {{ $pokemon->name }}</h1>

<form action="{{ route('pokemon.update', $pokemon) }}" method="post">
    @csrf
    @method('PUT')

    Numéro Pokédex : </br>
    <input type="number" name="pokedex_number" value="{{ $pokemon->pokedex_number }}" />
    </br>

    Nom : </br>
    <input type="text" name="name" value="{{ $pokemon->name }}" />
    </br>

    Sprite (URL de l'image) : </br>
    <input type="text" name="sprite" value="{{ $pokemon->sprite }}" placeholder="https://..." />
    </br>

    Types : </br>
    @foreach ($types as $type)
        <label>
            <input
                type="checkbox"
                name="types[]"
                value="{{ $type->id }}"
                {{ $pokemon->types->contains($type->id) ? 'checked' : '' }}
            />
            {{ $type->name }}
        </label>
        </br>
    @endforeach

    <button type="submit">Modifier</button>
</form>