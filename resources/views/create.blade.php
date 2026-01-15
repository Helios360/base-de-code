<h1>Ajouter un cadeau</h1>

<form action="{{ route('gifts.store') }}" method="POST">
    @include('gifts._form', ['buttonText' => 'Enregistrer'])
</form>

<a href="{{ route('home') }}">Retour</a>