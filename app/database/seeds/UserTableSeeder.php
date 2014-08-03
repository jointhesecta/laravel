<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Ricardo Martinez Montes',
            'username' => 'ricardo',
            'email'    => 'mrtnz.rcrd@gmail.com',
            'password' => Hash::make('ricardo'),
        ));
        User::create(array(
            'name'     => 'Victor Alvarez Martinez Montes',
            'username' => 'victor',
            'email'    => 'victor87eg6@gmail.com',
            'password' => Hash::make('victor'),
        ));
    }

}