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
        // \App\Models\User::factory(10)->create();
        \App\Models\Admin::factory(1)->create(['email' => 'admin@parigyan.com']);
        \App\Models\Accountant::factory(1)->create(['email' => 'accountant@parigyan.com']);
        \App\Models\Accountant::factory(2)->create();
        \App\Models\Client::factory(1)->create(['email' => 'client@parigyan.com']);
        \App\Models\Client::factory(5)->create();
        \App\Models\Project::factory(5)->create();
        \App\Models\Invoice::factory(5)->create();
    }
}
