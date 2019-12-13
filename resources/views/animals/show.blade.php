@extends('layouts.template')

@section('content')

<table>
    <thead>
        <tr> 
            <th> Nom </th>
            <th> Sexe </th>
            <th> Age </th>
            <th> Poids </th>
            <th> Taille </th>
            <th> Race </th> 
            <th> Modifier </th>
            <th> Supprimer </th>
        </tr>
    <tbody>
        @foreach ($animals as $animal)
        <tr>
                <td> {{ $animal->name }} </td>
                <td> {{ $animal->sex }} </td>
                <td> {{ $animal->age }} ans </td> 
                <td> {{ $animal->weight}} kg </td>
                <td> {{ $animal->height }} cm </td>
                <td> {{ $animal->breed->name }} </td>
                <td>
                    <form action="{{ route('editAnimal', $animal->id) }}" method="POST">
                        @csrf                                
                        <button type="submit">Modifier</button>
                    </form>    
                </td> 
                <td>
                    <form action="{{ route('deleteAnimal', $animal->id) }}" method="POST">
                        @csrf 
                        <button type="submit">Supprimer</button>    
                    </form>    
                </td> 
        </tr>
        @endforeach
    </tbody>

@endsection