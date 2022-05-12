<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'task_id' => null,
                'name' => 'Addressbook',
                'controller' => null,
                'uri' => '/addressbook',
                'icon' => 'fa-database',
                'order' => 100
            ],
            [
                'task_id' => null,
                'name' => 'Inventory',
                'controller' => '',
                'uri' => '',
                'icon' => 'fa-cubes',
                'order' => 200
            ],
            [
                'task_id' => 2,
                'name' => 'Panel',
                'controller' => 'ItemPanelController',
                'uri' => '/panel',
                'icon' => 'fa-book',
                'order' => 500
            ],
            [
                'task_id' => null,
                'name' => 'Sales',
                'controller' => '',
                'uri' => '',
                'icon' => 'fa-shopping-cart',
                'order' => 300
            ],
            [
                'task_id' => 4,
                'name' => 'Sales Order',
                'controller' => 'SalesOrderController',
                'uri' => '/sales',
                'icon' => 'fa-shipping-cart',
                'order' => 100
            ],

            [
                'task_id' => null,
                'name' => 'System',
                'controller' => null,
                'uri' => null,
                'icon' => 'fa-tools',
                'order' => 999
            ],
            [
                'task_id' => 6,
                'name' => 'Users',
                'controller' => 'UserController',
                'uri' => '/users',
                'icon' => 'fa-book',
                'order' => 100
            ],
            [
                'task_id' => 6,
                'name' => 'Roles',
                'controller' => 'RoleController',
                'uri' => '/roles',
                'icon' => 'fa-key',
                'order' => 200
            ],
            [
                'task_id' => 6,
                'name' => 'Tasks',
                'controller' => 'TaskController',
                'uri' => '/tasks',
                'icon' => 'fa-key',
                'order' => 300
            ],
            [
                'task_id' => 6,
                'name' => 'Routes',
                'controller' => 'RouteController',
                'uri' => '/routes',
                'icon' => 'fa-key',
                'order' => 400
            ],
            [
                'task_id' => 6,
                'name' => 'Jobs',
                'controller' => 'JobController',
                'uri' => '/jobs',
                'icon' => 'fa-key',
                'order' => 500
            ],
            [
                'task_id' => 6,
                'name' => 'Scheduler',
                'controller' => 'SchedulerController',
                'uri' => '/scheduler',
                'icon' => 'fa-key',
                'order' => 600
            ],
            [
                'task_id' => 6,
                'name' => 'Emails',
                'controller' => 'EmailController',
                'uri' => '/emails',
                'icon' => 'fa-key',
                'order' => 600
            ]

        ]);
    }
}
