<h1>Modifer : {{ $gift->name }}</h1>

<form action="{{ route('gifts.update', $gift) }}" method="POST">
    @method('PUT')
    @include('gifts._form', ['gift' => '$gift', 'buttonText' => 'Modifer'])
</form>

<a href="{{ route('gifts.show', $gift) }}">Annuler</a>