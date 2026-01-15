@csrf
<label for="name">Nom</label>
<input type="text" name="name" id="name" value="{{ old('name', $gift->name ?? '') }}">
@error('name') <p>{{ $message }}</p> @enderror

<label for="url">URL</label>
<input type="text" name="url" id="url" value="{{ old('url', $gift->url ?? '') }}">
@error('url') <p>{{ $message }}</p> @enderror

<label for="details">Détails</label>
<textarea name="details" id="details" value="{{ old('details', $gift->details ?? '') }}"></textarea>
@error('details') <p>{{ $message }}</p> @enderror

<label for="price">Prix</label>
<input type="text" name="price" id="price" value="{{ old('price', $gift->price ?? '') }}">
@error('price') <p>{{ $message }}</p> @enderror

<button type="submit">{{$buttonText}}</button>