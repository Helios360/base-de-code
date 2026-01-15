<h1>{{ $gift->name }}</h1>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<p><strong>Prix :</strong>{{ number_format($gift->price, 2) }}€</p>

@if($gift->url)
    <p><strong>URL :</strong><a href="{{ $gift->url }}" target="_blank">{{ $gift->url }}</a><p>
@endif
@if($gift->details)
    <p><strong>Details :</strong>{{$gift->details}}</p>
@endif
<a href="{{ route('home') }}"> Retour </a>
<a href="{{ route('gifts.edit', $gift) }}"> Modifier </a>