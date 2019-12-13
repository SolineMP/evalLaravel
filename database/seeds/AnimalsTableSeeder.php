<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'Felindra',
            'sex' => 'female' ,
            'age' => 2,
            'weight' => 12,
            'height' => 50,
            'breed_id' => 1, 
        ]);

        DB::table('animals')->insert([
            'name' => 'Perturbin',
            'sex' => 'male' ,
            'age' => 3,
            'weight' => 15,
            'height' => 45,
            'breed_id' => 2, 
        ]);
    }
}
