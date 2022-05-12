<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            [
                'type' => 'resource',
                'uri' => 'users',
                'controller' => 'UserController',
                'function' => 'index',
                'name' => 'users.show',
            ],
            [
                'type' => 'get',
                'uri' => 'panel',
                'controller' => 'ItemPanelController',
                'function' => 'index',
                'name' => 'users.show',
            ],
            [
                'type' => 'resource',
                'uri' => 'tasks',
                'controller' => 'TaskController',
                'function' => 'index',
                'name' => 'users.show',
            ],
            [
                'type' => 'resource',
                'uri' => 'routes',
                'controller' => 'RouteController',
                'function' => 'index',
                'name' => 'users.show',
            ],
            [
                'type' => 'resource',
                'uri' => 'emails',
                'controller' => 'EmailController',
                'function' => 'index',
                'name' => 'users.show',
            ]
        ]);
    }
}
