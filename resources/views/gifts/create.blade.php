@extends('layouts.app')

@section('title', 'Liste des cadeaux')

@section('content')

<h2>Ajouter un cadeau</h2>

<form action="{{ route('gifts.store') }}" method="POST">
    @include('gifts._form', ['buttonText' => 'Enregistrer'])
</form>

<a href="{{ route('home') }}">Retour</a>
@endsection