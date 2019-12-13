<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            'name' => 'Chat',
            'classification' => 'mammifère' ,
            'life_expectancy' => 16,
        ]);

        DB::table('breeds')->insert([
            'name' => 'Chien',
            'classification' => 'mammifère' ,
            'life_expectancy' => 13,
        ]);
    }
}
