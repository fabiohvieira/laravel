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
        Route::resource('routes', RouteController::class);
        Route::resource('tasks', TaskController::class);
        Route::resource('addressbooks', AddressBookController::class);
        Route::resource('datasources', DataSourceController::class);
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('securities', SecurityController::class);
        Route::resource('panel', ItemPanelController::class);
        Route::resource('addressbook', AddressBookController::class);

        Route::post('users/{id}/edit/roles', 'UserController@addUserRole')->name('users.roles.add');
        Route::post('roles/{id}/edit/tasks', 'RoleController@updateTasksRole')->name('roles.tasks.update');

        // $routes = \App\Models\Route::all();
        // foreach ($routes as $route) {
            
        //     switch ($route->type) {
        //         case 'get':
        //             Route::get($route->uri, $route->controller . '@' . $route->function);
        //             break;
                
        //         case 'resource':
        //             Route::resource($route->uri, $route->controller);
        //             break;
                    
                
        //         default:
        //             # code...
        //             break;
        //     }
        
        
        // }
    });
    
} catch (\Throwable $th) {
    //throw $th;
}
