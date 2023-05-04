<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Designation::create([
            'name'    => 'Legal Manager',
        ]);
        \App\Models\Designation::create([
            'name'    => 'Laravel Developer',
        ]);
        \App\Models\Designation::create([
            'name'    => 'Flutter Developer',
        ]);
        \App\Models\Designation::create([
            'name'    => 'Web Developer',
        ]);
        \App\Models\Designation::create([
            'name'    => 'General Manager',
        ]);
        \App\Models\Designation::create([
            'name'    => 'CEO',
        ]);
        \App\Models\Designation::create([
            'name'    => 'Android Developer',
        ]);
    }
}
