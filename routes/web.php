<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout')->name('logout');

try {

    Route::middleware(['auth'])->group(function () {
       
        Route::get('/', function() {
            return view('app');
        });
        // Route::resource('tasks', TaskController::class);
        //Route::resource('routes', RouteController::class);

        $routes = \App\Models\Route::all();
        foreach ($routes as $route) {
            
            switch ($route->type) {
                case 'get':
                    Route::get($route->uri, $route->controller . '@' . $route->function);
                    break;
                
                case 'resource':
                    Route::resource($route->uri, $route->controller);
                    break;
                    
                
                default:
                    # code...
                    break;
            }
        
        
        }
    });
    
} catch (\Throwable $th) {
    //throw $th;
}