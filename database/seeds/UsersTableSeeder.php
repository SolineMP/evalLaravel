<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert ([
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => bcrypt('12345678'),
            'role_id' => '1'
        ]);

        DB::table('users')->insert ([
            'name' => 'notadmin',
            'email' => 'notadmin@admin.fr',
            'password' => bcrypt('12345678'),
            'role_id' => '2'
        ]);


    }
}
