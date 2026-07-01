
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Types</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="pokedex">
        <header class="pokedex__header">
            <span class="pokedex__ball" aria-hidden="true"></span>
            <h1 class="pokedex__title">Types</h1>
        </header>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
            @foreach ($types as $type)
                <a href="{{ route('type.show', $type) }}" class="type-badge" style="background-color: {{ $type->color }}">{{ $type->name }}</a>
            @endforeach
        </div>
        <br>
        <a href="{{ route('type.create') }}">Créer un nouveau type</a>
    </div>
</body>
</html>