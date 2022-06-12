<?php

namespace App\Http\Controllers;

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
        
        $tasks = \App\Models\Task::whereNull('task_id')
            ->with('relations', 'relations.relations', 'relations.parent', 'relations.relations.relations')
            ->orderBy('order')
            ->orderBy('name')
            ->get()
            ->toArray();

        Session::put('tasks', $tasks);

        return true;

    }

}
