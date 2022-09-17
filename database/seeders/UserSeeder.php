<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@bookstore.com',
            'type' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Customer One',
            'email' => 'customerone@bookstore.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Customer Two',
            'email' => 'customertwo@bookstore.com',
        ]);
    }
}
