<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        User::Create([
            'name' => 'Blas Mayta',
            'email' => 'admin@admin.com',
            'password'=>bcrypt('Admin46092')
        ])->assignRole('Admin');

        User::factory(99)->create();
    }
}
