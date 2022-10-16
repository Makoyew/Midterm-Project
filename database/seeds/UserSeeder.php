<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'lname' => 'Mueblas',
                'fname' => 'Makoy',
                'address' => 'Tinangnan',
                'phone' => '09308239965',
                'email' => 'marklistermueblas3@gmail.com',
                'password' => bcrypt('password1234')
            ],
            [
                'id' => 2,
                'lname' => 'Mueblas',
                'fname' => 'Marielle',
                'address' => 'Tinangnan',
                'phone' => '09468314163',
                'email' => 'mariellemueblas3@gmail.com',
                'password' => bcrypt('password12345')
            ],
            [
                'id' => 3,
                'lname' => 'Lopez',
                'fname' => 'Kyla',
                'address' => 'Manila',
                'phone' => '09124466088',
                'email' => 'kylalou@gmail.com',
                'password' => bcrypt('password12')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
