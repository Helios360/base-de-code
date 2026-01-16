@extends('layouts.app')

@section('title', 'Liste des cadeaux')

@section('content')

<h2>Modifer : {{ $gift->name }}</h2>

<form action="{{ route('gifts.update', $gift) }}" method="POST">
    @method('PUT')
    @include('gifts._form', ['gift' => '$gift', 'buttonText' => 'Modifer'])
</form>

<a href="{{ route('gifts.show', $gift) }}">Annuler</a>
@endsection