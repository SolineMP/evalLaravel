@extends('layouts.template')

@section('content')
    @csrf
<form action="storeAnimal" method="POST">
    <div>
        <label for="name">Nom du film</label>
        <input type="text" name="name" placeholder="Nom..." required>
    </div>
    <div>
        <label for="sex"> Sexe </label>
        <input type="text" name="sex" placeholder="Sexe..." required>
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age" placeholder="Age en année..." required>
    </div>
    <div>
        <label for="weight">Poids</label>
        <input type="text" name="weight" placeholder="Poids..." required>
    </div>
    <div>
        <label for="height">Taille</label>
        <input type="text" name="height" placeholder="Taille..." required>
    </div>
    <div>
        <label for="breed_id">Race</label>
        <select name="breed_id" id="breed" required>
            @foreach($breeds as $breed)
                    <option value="{{ $breed->id }}">{{ $breed->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <input type="submit" class="sending" value="Ajouter">
    </div>
</form>
    
@endsection