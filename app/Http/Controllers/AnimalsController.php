<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal; 
use App\Breed;

class AnimalsController extends Controller
{
    public function showAnimals() 
    {
        $animals = Animal::All();

        return view('animals.show', compact('animals')); 
    }

    public function createAnimal()
    {
        $breeds = Genre::All();
        return view('animals.create', compact('breeds'));
    }
    public function edit($id)
    {
        $animal = Animal::find($id); 
        $breeds = Breed::All();
        return view('animals.edit', compact('animal', 'breeds')); 
    }

    public function update(Request $request, $id)
    {
        // recherche du film dans la table movies
        $animal = Animal::find($id); 
        $animal->name = $request->name;
        $animal->sex = $request->sex;
        $animal->age = $request->age;
        $animal->weight = $request->weight;
        $animal->height = $request->height;
        $animal->breed_id = $request->breed_id;

        $animal->save();
        return redirect('/animals'); 
    }
}
