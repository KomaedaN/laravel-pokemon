<h1>Créer un nouveau Type</h1>

<form action="{{ route('type.store') }}" method="post">
    @csrf
    Nom :
    </br>
    <input type="text" name="name" />
    </br>
    Couleur (paterne) :
    </br>
    <input type="text" name="color" placeholder="ex: #4a892b" />
    </br>
    <button type="submit">Créer</button>
</form>
