<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    protected $toTruncate = ['routes', 'tasks'];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
        $this->call(UserSeeder::class);
        
        \App\Models\User::factory(100)->create();
        \App\Models\ItemBranch::factory(100)->create();
        \App\Models\SaleDetail::factory(100)->create();
        \App\Models\Addressbook::factory(100)->create();
        \App\Models\ItemLocation::factory(100)->create();
        $this->call(RouteSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
