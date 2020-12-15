<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesTableSeeder::class,
        //    UserTableSeeder::class);
           $this->call(ProductSeeder::class);
        \App\Models\product::factory(50)->create();
}}
