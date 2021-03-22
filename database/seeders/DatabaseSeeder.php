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
        \App\Models\User::factory(1)->create();
      //  \App\Models\Branch::factory(10)->create();
     //   \App\Models\Supplier::factory(15)->create();
     //   \App\Models\Warehouse::factory(15)->create();
        \App\Models\StockCategory::factory(20)->create();
        \App\Models\Stock::factory(100)->create();
    }
}
