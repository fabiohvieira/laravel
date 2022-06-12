<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\UsersRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
    public function index() {

        return view('layouts.sidebar.login');

    }

    public function login(Request $request) {

        if (Auth::attempt(['user' => $request->user, 'password' => $request->password])) {

            $this->putSessionTasks();

            return redirect('/');
        }

        return redirect('/login');

    }

    public function logout() {

        Auth::logout();

        return redirect('/login');

    }

    public function putSessionTasks() {
        
        if (Auth::user()->admin == 1) {
            $tasks = Task::whereNull('task_id')
                //->whereIn('id', UsersRole::where('user_id', Auth::id())->pluck('role_id')->toArray())
                ->with('relations', 'relations.relations', 'relations.parent', 'relations.relations.relations')
                ->orderBy('order')
                ->orderBy('name')
                ->get()
                ->toArray();
        } else {
            $tasks = Task::whereNull('task_id')
                ->whereIn('id', UsersRole::where('user_id', Auth::id())->pluck('role_id')->toArray())
                ->with('relations', 'relations.relations', 'relations.parent', 'relations.relations.relations')
                ->orderBy('order')
                ->orderBy('name')
                ->get()
                ->toArray();            
        }

        Session::put('tasks', $tasks);

        return true;

    }

}
