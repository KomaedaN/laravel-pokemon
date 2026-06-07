<div>
    <ul style="padding: 0; display: flex; flex-wrap: wrap; gap: 1rem;">
        @foreach ($types as $type)
            <li
                style="background: {{ $type->color }};  list-style: none; width: 6rem;     display: flex;
                align-items: center;
                justify-content: center;
                height: 2rem; font: 16px Verdana; color: #fbfbfb">
                {{ $type->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('type.create') }}">Créer un nouveau type</a>
</div>
