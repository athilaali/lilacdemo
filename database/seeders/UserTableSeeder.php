<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use  App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            \App\Models\User::create([
                'name'             => 'Athila Mumthas',
                'department_id'    => '1',
                'designation_id'   => '1',
                'phone_number'     => '9685741235',
            ]);
            \App\Models\User::create([
                'name'             => 'John',
                'department_id'    => '2',
                'designation_id'   => '2',
                'phone_number'     => '6874523985',
            ]);
            \App\Models\User::create([
                'name'             => 'Anurag',
                'department_id'    => '1',
                'designation_id'   => '3',
                'phone_number'     => '9988774455',
            ]);
            \App\Models\User::create([
                'name'             => 'Akarsh Hemandh',
                'department_id'    => '3',
                'designation_id'   => '3',
                'phone_number'     => '91234567898',
            ]);

            \App\Models\User::create([
                'name'             => 'Mohammed Fahiz',
                'department_id'    => '2',
                'designation_id'   => '4',
                'phone_number'     => '9513574682',
            ]);
            \App\Models\User::create([
                'name'             => 'Anagha Panikkar',
                'department_id'    => '1',
                'designation_id'   => '5',
                'phone_number'     => '9633020734',
            ]);
            \App\Models\User::create([
                'name'             => 'Nizar',
                'department_id'    => '4',
                'designation_id'   => '6',
                'phone_number'     => '7891234568',
            ]);
            \App\Models\User::create([
                'name'             => 'Ajay',
                'department_id'    => '2',
                'designation_id'   => '7',
                'phone_number'     => '6123789452',
            ]);

        }

}
