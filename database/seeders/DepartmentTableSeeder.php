<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Department::create([
            'name'   => 'Developer',
        ]);
        \App\Models\Department::create([
            'name'   => 'HR',
        ]);
        \App\Models\Department::create([
            'name'   => 'Designer',
        ]);
        \App\Models\Department::create([
            'name'   => 'Sales',
        ]);
    }
}
