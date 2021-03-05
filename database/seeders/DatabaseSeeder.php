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
        $this->call(UserSeeder::class);
        $this->call(EventFormatSeeder::class);
        $this->call(EventTypeSeeder::class);
        $this->call(EventStyleSeeder::class);
        $this->call(EventOptionSeeder::class);
        $this->call(EventOrderSeeder::class);
        $this->call(PageCategorySeeder::class);
        $this->call(PageSeeder::class);
        $this->call(DishCategorySeeder::class);
        $this->call(DishSeeder::class);
    }
}
