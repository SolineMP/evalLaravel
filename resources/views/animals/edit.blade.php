@extends('layouts.template')

@section('content')
<form action="{{ route('updateAnimal', $animal->id)}}" method="POST">
        @csrf
        <div>
            <label for="name">Nom du film</label>
            <input type="text" name="name" placeholder="Nom..." value="{{ $animal->name}}" required>
        </div>
        <div>
            <label for="sex"> Sexe </label>
            <input type="text" name="sex" placeholder="Sexe..." value="{{ $animal->sex}}" required>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" placeholder="Age en année..." value="{{ $animal->age}}" required>
        </div>
        <div>
            <label for="weight">Poids</label>
            <input type="text" name="weight" placeholder="Poids..." value="{{ $animal->weight}}" required>
        </div>
        <div>
            <label for="breed_id">Race</label>
            <select name="breed_id" id="breed" required>
                @foreach($breeds as $breed)
                    @if($breed->name == $animal->breed->name) 
                        <option selected value="{{ $breed->id }}">{{$breed->name}}</option>
                    @else
                        <option value="{{ $breed>id }}">{{ $breed->name }}</option>
                    @endif 

                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" class="sending" value="Modifier">
        </div>
    </form>
@endsection