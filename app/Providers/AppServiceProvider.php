<?php

namespace App\Providers;

use App\Models\Task;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        app('view')->composer('app', function ($view) {

            $action = app('request')->route()->getAction();
    
            if (isset($action['controller'])) {
                
                $controller = class_basename($action['controller']);
                list($controller, $action) = explode('@', $controller);
                $current_task = Task::where('controller', $controller)->first();


            } else {
                $controller = '';
                $action = '';    
                $current_task = array();            
            }

            $view->with(compact('controller', 'action', 'current_task'));
        });
    }
}
